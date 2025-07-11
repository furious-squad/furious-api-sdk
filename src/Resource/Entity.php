<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Entity
 *
 * Represents an entity resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Entity extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Entity";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "Entity";
    
    protected const API_URI         = "entity";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}