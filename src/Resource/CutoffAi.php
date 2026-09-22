<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class CutoffAi
 *
 * Represents a cutoff AI resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class CutoffAi extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Cutoff AI";
    protected const CATEGORY_NAME   = "Finance";
    protected const GRAPH_API_NAME  = "CutoffAI";

    protected const API_URI         = "cutoff-ai";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
