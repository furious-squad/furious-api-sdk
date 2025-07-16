<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class TodoComment.
 *
 * Represents a todo comment resource in the Furious API.
 */
class TodoComment extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Todo Comment';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'TodoComment';

    protected const API_URI = 'todo-comment';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
