<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Entity.
 *
 * Represents an entity resource in the Furious API.
 */
class Entity extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Entity';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'Entity';

    protected const API_URI = 'entity';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
