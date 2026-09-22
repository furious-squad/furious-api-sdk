<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Permissions.
 *
 * Represents a permissions resource in the Furious API.
 */
class Permissions extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Permissions';
    protected const CATEGORY_NAME = 'Divers';
    protected const GRAPH_API_NAME = 'Permissions';

    protected const API_URI = 'permissions';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
