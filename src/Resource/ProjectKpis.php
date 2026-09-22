<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProjectKpis.
 *
 * Represents a project KPIs resource in the Furious API.
 */
class ProjectKpis extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Project KPIs';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'ProjectKpis';

    protected const API_URI = 'project-kpis';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
