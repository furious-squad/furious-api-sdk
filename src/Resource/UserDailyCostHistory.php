<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class UserDailyCostHistory
 *
 * Represents a user daily cost history resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class UserDailyCostHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "User Daily Cost History";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "UserDailyCostHistory";
    
    protected const API_URI         = "user-daily-cost-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE ];

}