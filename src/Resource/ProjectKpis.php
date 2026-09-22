<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProjectKpis
 *
 * Represents a project KPIs resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProjectKpis extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Project KPIs";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "ProjectKpis";

    protected const API_URI         = "project-kpis";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}
