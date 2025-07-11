<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProposalAddon
 *
 * Represents a proposal addon resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProposalAddon extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Proposal Addon";
    protected const CATEGORY_NAME   = "Devis";
    protected const GRAPH_API_NAME  = "ProposalAddon";
    
    protected const API_URI         = "proposal-addon";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}