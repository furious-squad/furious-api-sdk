<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Events
 *
 * Represents an events resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Events extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Events";
    protected const CATEGORY_NAME   = "Divers";
    protected const GRAPH_API_NAME  = "Events";

    protected const API_URI         = "events";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_UPDATE ];
}
