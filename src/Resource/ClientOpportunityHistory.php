<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ClientOpportunityHistory.
 *
 * Represents a client opportunity history resource in the Furious API.
 */
class ClientOpportunityHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Client Opportunity History';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'ClientOpportunityHistory';

    protected const API_URI = 'client-opportunity-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
