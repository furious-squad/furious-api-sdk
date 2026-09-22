<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class AbsenceSolde
 *
 * Represents an absence solde resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class AbsenceSolde extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Absence solde";
    protected const CATEGORY_NAME   = "RH";
    protected const GRAPH_API_NAME  = "AbsenceSolde";
    
    protected const API_URI         = "absence-solde";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE ];

}