<?php

namespace Tests\Unit\Http;

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Http\Client;
use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Resource\Postit;
use Furious\FuriousApiSdk\Token\JwtToken;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../bootstrap.php';

/**
 * Verifies HTTP requests and error handling without network access.
 *
 * @internal
 *
 * @coversNothing
 */
class HttpClientTest extends TestCase
{
    /** @dataProvider httpMethods */
    public function testHttpMethodHeadersAndPayload(string $method, string $httpMethod, string $endpoint): void
    {
        $history = [];
        $client = $this->createClient([new Response(200, [], '{"success":true}')], $history);
        $result = 'get' === $method ? $client->get($endpoint) : $client->{$method}($endpoint, ['id' => 42]);
        $this->assertSame(['success' => true], $result);
        $this->assertCount(1, $history);
        $request = $history[0]['request'];
        $this->assertSame($httpMethod, $request->getMethod());
        $this->assertSame('offline-test-token', $request->getHeaderLine('F-Auth-Token'));
        $this->assertSame('/api/v2/postit/', $request->getUri()->getPath());
        if ('get' === $method) {
            $this->assertSame('query={Postit(limit:1){id}}', rawurldecode($request->getUri()->getQuery()));
            $this->assertSame('', (string) $request->getBody());
        } else {
            $this->assertSame(['id' => 42], json_decode((string) $request->getBody(), true));
        }
    }

    /** @dataProvider httpMethods */
    public function testRequestExceptionWithoutResponseUsesIntegerCode(string $method, string $httpMethod, string $endpoint): void
    {
        $history = [];
        $failure = new RequestException('Offline request failure', new Request($httpMethod, 'https://instance.example.test/api/v2/postit/'));
        $client = $this->createClient([$failure], $history);

        try {
            $client->{$method}($endpoint);
            $this->fail('An ApiException was expected.');
        } catch (ApiException $e) {
            $this->assertSame(0, $e->getCode());
            $this->assertSame('No body', $e->getMessage());
        }
    }

    public function httpMethods(): array
    {
        return [
            'get' => ['get', 'GET', 'postit/?query={Postit(limit:1){id}}'],
            'post' => ['post', 'POST', 'postit'],
            'put' => ['put', 'PUT', 'postit'],
            'delete' => ['delete', 'DELETE', 'postit'],
        ];
    }

    public function testSearchUsesCanonicalGetWithoutRedirect(): void
    {
        $history = [];
        $client = $this->createClient([new Response(200, [], '{"success":true,"data":{"Postit":[]}}')], $history);
        $postit = new Postit($client);
        $this->assertTrue($postit->search(['id'])['success']);
        $this->assertCount(1, $history);
        $this->assertSame('GET', $history[0]['request']->getMethod());
        $this->assertSame('/api/v2/postit/', $history[0]['request']->getUri()->getPath());
    }

    public function testBatchPreservesKeysHeadersAndFailureContract(): void
    {
        $history = [];
        $client = $this->createClient([
            new Response(200, [], '{"success":true,"data":{"Postit":[]}}'),
            new Response(503, [], '{"success":false}'),
        ], $history);
        $result = $client->getBatch(['today' => 'postit/?query=first', 'total' => 'postit/?query=second']);
        $this->assertTrue($result['today']['success']);
        $this->assertNull($result['total']);
        $this->assertSame(['today', 'total'], array_keys($result));
        $this->assertCount(2, $history);
        foreach ($history as $entry) {
            $this->assertSame('GET', $entry['request']->getMethod());
            $this->assertSame('offline-test-token', $entry['request']->getHeaderLine('F-Auth-Token'));
        }
    }

    private function createClient(array $responses, array &$history): Client
    {
        $stack = HandlerStack::create(new MockHandler($responses));
        $stack->push(Middleware::history($history));
        $config = new Config('https://instance.example.test', new JwtToken('offline-test-token'));
        $client = new Client($config);
        $property = new \ReflectionProperty(Client::class, 'client');
        if (PHP_VERSION_ID < 80100) {
            $property->setAccessible(true);
        }
        $property->setValue($client, new GuzzleClient([
            'handler' => $stack,
            'base_uri' => $config->getInstanceApiUrl().'/',
        ]));

        return $client;
    }
}
