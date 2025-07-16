<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class DaysOff.
 *
 * Represents the "Days off" resource in the Furious API.
 */
class DaysOff extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Days off';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'DaysOff';

    protected const API_URI = 'days-off';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
