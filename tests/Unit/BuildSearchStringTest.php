<?php

namespace Tests\Unit\GraphQL;

use Furious\FuriousApiSdk\FuriousApiSdk;
use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Query\Filter\Equal;
use Furious\FuriousApiSdk\Query\Order\OrderAsc;
use Furious\FuriousApiSdk\Query\Order\OrderDesc;
use Furious\FuriousApiSdk\Resource\Absence;
use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../bootstrap.php';

/**
 * Unit tests for the Absence::buildSearchString method.
 *
 * These tests validate the construction of GraphQL query strings,
 * ensuring proper handling of fields, filters, orders, limits, and offsets.
 *
 * @internal
 *
 * @coversNothing
 */
class BuildSearchStringTest extends TestCase
{
    private FuriousApiSdk $sdk;

    /**
     * Initializes the SDK instance before each test using the API URL
     * provided through environment variables.
     */
    protected function setUp(): void
    {
        $config = new Config('https://myinstance.furious.test');
        $this->sdk = new FuriousApiSdk($config, ['timeout' => 10]);
    }

    /**
     * Ensures the query is correctly built when only fields are provided,
     * with empty filters and orders, including the default limit and offset.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithOnlyFields(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'name'];
        $filters = [];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0){id,name}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures multiple fields are included in the query correctly,
     * with no filters or orders, using default pagination.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithMultipleFields(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'name', 'start_date', 'end_date', 'status'];
        $filters = [];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0){id,name,start_date,end_date,status}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures a single filter is included properly in the query
     * alongside fields and default pagination.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithSingleFilter(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'status'];
        $filters = [Equal::set('status', 'approved')];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0,filter:{status:{eq:"approved"}}){id,status}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures multiple filters are combined correctly into a single
     * filter object in the query string.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithMultipleFilters(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'pseudo', 'start_date'];
        $filters = [
            Equal::set('pseudo', 'madeline'),
            Equal::set('status', 'pending'),
        ];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0,filter:{pseudo:{eq:"madeline"},status:{eq:"pending"}}){id,pseudo,start_date}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures a single order clause is correctly formatted in the query
     * alongside fields and default pagination.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithSingleOrder(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'start_date'];
        $filters = [];
        $orders = [OrderAsc::field('start_date')];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0,order:[{start_date:asc}]){id,start_date}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures multiple order clauses are applied in sequence and
     * formatted correctly in the query string.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithMultipleOrders(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'start_date', 'end_date'];
        $filters = [];
        $orders = [
            OrderAsc::field('start_date'),
            OrderDesc::field('end_date'),
        ];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0,order:[{start_date:asc},{end_date:desc}]){id,start_date,end_date}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures the method correctly handles an empty fields array,
     * resulting in an empty selection set in the query.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithEmptyFields(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = [];
        $filters = [];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0){}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures the method behaves correctly with empty filters and orders,
     * including only fields and default pagination.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithEmptyFiltersAndOrders(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'name'];
        $filters = [];
        $orders = [];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0){id,name}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures invalid objects in filters and orders are skipped,
     * resulting in a valid query without those entries.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithInvalidFilterAndOrderObjects(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id'];
        $filters = ['invalid_filter'];
        $orders = [123];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0){id}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures custom limit and offset values are correctly reflected
     * in the generated query string.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithCustomLimitAndOffset(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'name'];
        $filters = [];
        $orders = [];
        $customOffset = 5;
        $customLimit = 50;

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders, $customOffset, $customLimit);
        $expectedQuery = 'absence?query={Absence(limit:50,offset:5){id,name}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }

    /**
     * Ensures null or empty values in filters and orders arrays are ignored,
     * keeping only valid entries in the query string.
     *
     * @covers \Furious\FuriousApiSdk\Resource\Absence::buildSearchString
     */
    public function testBuildSearchStringWithNullOrEmptyFiltersAndOrders(): void
    {
        $absence = $this->sdk->getResource(Absence::class);

        $fields = ['id', 'name'];
        $filters = [null, Equal::set('pseudo', 'madeline'), null];
        $orders = [null, OrderAsc::field('start_date'), null];

        $actualQuery = $absence->buildSearchString($fields, $filters, $orders);
        $expectedQuery = 'absence?query={Absence(limit:20,offset:0,filter:{pseudo:{eq:"madeline"}},order:[{start_date:asc}]){id,name}}';

        $this->assertSame($expectedQuery, $actualQuery);
    }
}
