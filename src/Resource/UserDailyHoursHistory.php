<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserDailyCostHistory.
 *
 * Represents a user daily cost history resource in the Furious API.
 */
class UserDailyHoursHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Daily Hours History';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserDailyHoursHistory';

    protected const API_URI = 'user-daily-hours-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
