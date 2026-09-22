<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Todo.
 *
 * Represents a todo resource in the Furious API.
 */
class Todo extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Todo';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'Todo';

    protected const API_URI = 'todo';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
