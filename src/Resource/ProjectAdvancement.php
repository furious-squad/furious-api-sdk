<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProjectAdvancement
 *
 * Represents a project advancement resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProjectAdvancement extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Project Advancement";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "ProjectAdvancement";
    
    protected const API_URI         = "project-advancement";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH ];
}