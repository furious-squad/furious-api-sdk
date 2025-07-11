<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class ProjectCutoffBu
 *
 * Represents a project cutoff business unit resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class ProjectCutoffBu extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Project Cutoff Bu";
    protected const CATEGORY_NAME   = "Projet";
    protected const GRAPH_API_NAME  = "ProjectCutoffBu";
    
    protected const API_URI         = "project-cutoff-bu";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_SEARCH ];
}