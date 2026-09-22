<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class CashPlanner
 *
 * Represents a cash planner resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class CashPlanner extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Cash Planner";
    protected const CATEGORY_NAME   = "Finance";
    protected const GRAPH_API_NAME  = "CashPlanner";

    protected const API_URI         = "cash-planner";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
