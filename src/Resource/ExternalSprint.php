<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ExternalSprint
 *
 * Represents an external sprint resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ExternalSprint extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "External Sprint";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "ExternalSprint";
    
    protected const API_URI         = "external-sprint";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}