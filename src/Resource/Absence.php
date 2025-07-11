<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Absence
 *
 * Represents an absence resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Absence extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Absence";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "Absence";

    protected const API_URI         = "absence";

    protected const API_ALLOWED_ACTIONS     = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE ];
}