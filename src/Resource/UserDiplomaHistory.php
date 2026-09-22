<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class UserDiplomaHistory
 *
 * Represents a user diploma history resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class UserDiplomaHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "User Diploma History";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "UserDiplomaHistory";

    protected const API_URI         = "user-diploma-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH ];
}
