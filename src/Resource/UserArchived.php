<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserArchived.
 *
 * Represents a user archived resource in the Furious API.
 */
class UserArchived extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Archived';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserArchived';

    protected const API_URI = 'user-archived';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
