<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class TjmHistory
 *
 * Represents a TJM history resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class TjmHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "TJM History";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "TjmHistory";
    
    protected const API_URI         = "tjm-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}