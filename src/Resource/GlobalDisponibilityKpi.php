<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class GlobalDisponibilityKpi.
 *
 * Represents a global disponibility KPI resource in the Furious API.
 */
class GlobalDisponibilityKpi extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Global Disponibility KPI';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'GlobalDisponibilityKpi';

    protected const API_URI = 'global-disponibility-kpi';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
