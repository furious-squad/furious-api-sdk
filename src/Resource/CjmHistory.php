<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class CjmHistory
 *
 * Represents a CJM history resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class CjmHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "CJM History";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "CjmHistory";
    
    protected const API_URI         = "cjm-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];

}