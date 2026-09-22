<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class TodoTask
 *
 * Represents a todo task resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class TodoTask extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Todo Task";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "TodoTask";
    
    protected const API_URI         = "todo-task";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];

}