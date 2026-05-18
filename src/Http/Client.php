<?php

namespace Furious\FuriousApiSdk\Http;

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Token\JwtToken;
use Furious\FuriousApiSdk\Token\TokenInterface;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;

class Client
{
    private Config $config;
    private GuzzleClient $client;

    /**
     * __construct.
     */
    public function __construct(Config $config)
    {
        $this->config = $config;

        $this->client = new GuzzleClient([
            'base_uri' => $this->config->getInstanceApiUrl().'/',
            'timeout' => $this->config->getTimeout(),
        ]);
    }

    /**
     * get.
     *
     * @return array
     */
    public function get(string $endpoint)
    {
        try {
            $token = $this->config->getToken();
            $options = [];

            if ($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response = $this->client->post($endpoint, $options);

            return json_decode((string) $response->getBody(), true);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody = $response ? $response->getBody()->getContents() : 'No body';

            throw new ApiException($errorBody, $statusCode);
        }
    }

    /**
     * getBatch.
     *
     * @return array
     */
    public function getBatch(array $endpoints): array
    {
        $token   = $this->config->getToken();
        $headers = [];

        if ($token instanceof JwtToken) {
            $headers['F-Auth-Token'] = $token->getApiToken();
        }

        $promises = [];
        foreach ($endpoints as $key => $endpoint) {
            $promises[$key] = $this->client->getAsync($endpoint, [
                'headers' => $headers,
            ]);
        }

        $results   = [];
        $settled   = \GuzzleHttp\Promise\Utils::settle($promises)->wait();

        foreach ($settled as $key => $result) {
            if ($result['state'] === 'fulfilled') {
                $results[$key] = json_decode((string) $result['value']->getBody(), true);
            } else {
                $results[$key] = null;
            }
        }

        return $results;
    }

    /**
     * post.
     *
     * @return array
     */
    public function post(string $endpoint, array $data = [])
    {
        try {
            $token = $this->config->getToken();
            $options = ['json' => $data];

            if ($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response = $this->client->post($endpoint.'/', $options);

            return json_decode((string) $response->getBody(), true);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody = $response ? $response->getBody()->getContents() : 'No body';

            throw new ApiException($errorBody, $statusCode);
        }
    }

    /**
     * put.
     *
     * @return array
     */
    public function put(string $endpoint, array $data = [])
    {
        try {
            $token = $this->config->getToken();
            $options = ['json' => $data];

            if ($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response = $this->client->put($endpoint.'/', $options);

            return json_decode((string) $response->getBody(), true);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody = $response ? $response->getBody()->getContents() : 'No body';

            throw new ApiException($errorBody, $statusCode);
        }
    }

    /**
     * Delete.
     *
     * @return array
     */
    public function delete(string $endpoint, array $data = [])
    {
        try {
            $token = $this->config->getToken();
            $options = ['json' => $data];

            if ($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response = $this->client->delete($endpoint.'/', $options);

            return json_decode((string) $response->getBody(), true);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody = $response ? $response->getBody()->getContents() : 'No body';

            throw new ApiException($errorBody, $statusCode);
        }
    }

    /**
     * updateConfigToken.
     *
     * @return self
     */
    public function updateConfigToken(TokenInterface $token)
    {
        $this->config->setToken($token);

        return $this;
    }
}
