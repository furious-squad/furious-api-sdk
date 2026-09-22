<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProjectCutoff.
 *
 * Represents a project cutoff resource in the Furious API.
 */
class ProjectCutoff extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Project Cutoff';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'ProjectCutoff';

    protected const API_URI = 'project-cutoff';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}
