<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ClientOpportunityCutoffPipeline
 *
 * Represents a client opportunity cutoff pipeline resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ClientOpportunityCutoffPipeline extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Client Opportunity Cutoff Pipeline";
    protected const CATEGORY_NAME   = "CRM";
    protected const GRAPH_API_NAME  = "ClientOpportunityCutoffPipeline";

    protected const API_URI         = "client-opportunity-cutoff-pipeline";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
