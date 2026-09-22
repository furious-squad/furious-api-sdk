<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class AbsenceCancelled
 *
 * Represents an absence cancelled resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class AbsenceCancelled extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Absence cancelled";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "AbsenceCancelled";
    
    protected const API_URI         = "absence-cancelled";

    protected const API_ALLOWED_ACTIONS     = [ self::API_ACTION_SEARCH ];

}