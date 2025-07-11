<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProjectRateCardHistory
 *
 * Represents the history of project rate cards in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProjectRateCardHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Project Rate Card History";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "ProjectRateCardHistory";
    
    protected const API_URI         = "project-rate-card-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH ];
}