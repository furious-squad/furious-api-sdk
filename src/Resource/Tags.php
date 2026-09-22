<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Tags.
 *
 * Represents a tags resource in the Furious API.
 */
class Tags extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Tags';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'Tags';

    protected const API_URI = 'tags';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
