<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ExternalEmail
 *
 * Represents an external email resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ExternalEmail extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "External Email";
    protected const CATEGORY_NAME   = "Divers";
    protected const GRAPH_API_NAME  = "ExternalEmail";

    protected const API_URI         = "external-email";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
