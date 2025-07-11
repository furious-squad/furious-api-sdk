<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProposalRateCard
 *
 * Represents a proposal rate card resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProposalRateCard extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Proposal Rate Card";
    protected const CATEGORY_NAME   = "Devis";
    protected const GRAPH_API_NAME  = "ProposalRateCard";
    
    protected const API_URI         = "proposal-rate-card";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE];

}