<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserTaxHistory.
 *
 * Represents a user tax history resource in the Furious API.
 */
class UserTaxHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Tax History';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserTaxHistory';

    protected const API_URI = 'user-tax-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE];
}
