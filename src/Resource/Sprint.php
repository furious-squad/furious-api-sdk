<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Sprint
 *
 * Represents a sprint resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Sprint extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Sprint";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "Sprint";
    
    protected const API_URI         = "sprint";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE ];
}