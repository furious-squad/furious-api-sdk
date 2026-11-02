<?php

namespace Tests\Unit\GraphQL;

use Furious\FuriousApiSdk\Http\Client;
use Furious\FuriousApiSdk\Query\Filter\Equal;
use Furious\FuriousApiSdk\Resource\AbstractResource;
use Furious\FuriousApiSdk\Resource\Postit;
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../bootstrap.php';

/**
 * Unit tests for AbstractResource::searchBatch (added in 1.1.0, lost in 1.2.0, restored in 1.2.2).
 *
 * @internal
 *
 * @coversNothing
 */
class SearchBatchTest extends TestCase
{
    /**
     * Ensures every search of the batch is turned into its search URI and sent
     * through Client::getBatch with its key preserved.
     *
     * @covers \Furious\FuriousApiSdk\Resource\AbstractResource::searchBatch
     */
    public function testSearchBatchSendsEveryQueryThroughGetBatch(): void
    {
        $client = $this->createMock(Client::class);
        $client->expects($this->once())
            ->method('getBatch')
            ->with([
                'today' => 'postit/?query={Postit(limit:1,offset:0,filter:{type:{eq:"crm"}}){id}}',
                'total' => 'postit/?query={Postit(limit:20,offset:5){id}}',
            ])
            ->willReturn(['today' => ['success' => true], 'total' => ['success' => true]])
        ;

        $postit = new Postit($client);
        $results = $postit->searchBatch([
            'today' => ['fields' => ['id'], 'filters' => [Equal::set('type', 'crm')], 'orders' => [], 'limit' => 1],
            'total' => ['fields' => ['id'], 'filters' => [], 'orders' => [], 'offset' => 5],
        ]);

        $this->assertSame(['today' => ['success' => true], 'total' => ['success' => true]], $results);
    }

    /**
     * Guards the public API used by SDK consumers (Board) against another accidental removal.
     *
     * @coversNothing
     */
    public function testPublicApiKeepsBatchSearch(): void
    {
        $this->assertTrue(method_exists(AbstractResource::class, 'searchBatch'));
        $this->assertTrue(method_exists(Client::class, 'getBatch'));
    }
}
