<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class TodoCategory
 *
 * Represents a todo category resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class TodoCategory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Todo Category";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "TodoCategory";

    protected const API_URI         = "todo-category";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];
}
