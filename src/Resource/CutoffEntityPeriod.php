<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class CutoffEntityPeriod.
 *
 * Represents a cutoff entity period resource in the Furious API.
 */
class CutoffEntityPeriod extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Cutoff Entity Period';
    protected const CATEGORY_NAME = 'Finance';
    protected const GRAPH_API_NAME = 'CutoffEntityPeriod';

    protected const API_URI = 'cutoff-entity-period';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
