<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Tags
 *
 * Represents a tags resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Tags extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Tags";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "Tags";
    
    protected const API_URI         = "tags";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];
}