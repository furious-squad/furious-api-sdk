<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserProductionKpi.
 *
 * Represents a user production KPI resource in the Furious API.
 */
class UserProductionKpi extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Production KPI';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserProductionKpi';

    protected const API_URI = 'user-production-kpi';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
