<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class FinancialFlows
 *
 * Represents a financial flows resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class FinancialFlows extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Financial Flows";
    protected const CATEGORY_NAME   = "Finance";
    protected const GRAPH_API_NAME  = "FinancialFlows";

    protected const API_URI         = "financial-flows";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
