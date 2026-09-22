<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserContract.
 *
 * Represents a user contract resource in the Furious API.
 */
class UserContract extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Contract';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'UserContract';

    protected const API_URI = 'user-contract';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}
