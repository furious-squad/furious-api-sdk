<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class User
 *
 * Represents a user resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class User extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "User";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "User";
    
    protected const API_URI         = "user";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];

}