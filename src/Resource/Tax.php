<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Tax
 *
 * Represents a tax resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Tax extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Tax";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "Tax";
    
    protected const API_URI         = "tax";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}