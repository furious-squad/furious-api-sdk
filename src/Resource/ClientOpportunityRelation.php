<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ClientOpportunityRelation.
 *
 * Represents a client opportunity relation resource in the Furious API.
 */
class ClientOpportunityRelation extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Client Opportunity Relation';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'ClientOpportunityRelation';

    protected const API_URI = 'client-opportunity-relation';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
