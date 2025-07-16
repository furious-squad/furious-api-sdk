<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Team.
 *
 * Represents a team resource in the Furious API.
 */
class Team extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Team';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'Team';

    protected const API_URI = 'team';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
