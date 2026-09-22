<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserSalaryHistory.
 *
 * Represents a user salary history resource in the Furious API.
 */
class UserSalaryHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Salary History';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserSalaryHistory';

    protected const API_URI = 'user-salary-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE];
}
