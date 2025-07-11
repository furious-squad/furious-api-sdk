<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ClientOpportunity
 *
 * Represents a client opportunity resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ClientOpportunity extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Client Opportunity";
    protected const CATEGORY_NAME   = "CRM";
    protected const GRAPH_API_NAME  = "ClientOpportunity";
    
    protected const API_URI         = "client-opportunity";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];

}