<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserSkills.
 *
 * Represents a user skills resource in the Furious API.
 */
class UserSkills extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Skills';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserSkills';

    protected const API_URI = 'user-skills';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
