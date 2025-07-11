<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Contract
 *
 * Represents a contract resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Contract extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Contract";
    protected const CATEGORY_NAME   = "CRM";
    protected const GRAPH_API_NAME  = "Contract";
    
    protected const API_URI         = "contract";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH ];

}