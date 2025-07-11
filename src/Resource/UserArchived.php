<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class UserArchived
 *
 * Represents a user archived resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class UserArchived extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "User Archived";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "UserArchived";
    
    protected const API_URI         = "user-archived";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];

}