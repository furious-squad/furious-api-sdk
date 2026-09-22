<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProjectRateCard.
 *
 * Represents a project rate card resource in the Furious API.
 */
class ProjectRateCard extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Project Rate Card';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'ProjectRateCard';

    protected const API_URI = 'project-rate-card';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
