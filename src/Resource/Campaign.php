<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Campaign.
 *
 * @method static Campaign create(array $fields = [])
 * @method static Campaign search(array $fields = [])
 * @method static Campaign update(array $fields = [])
 */
class Campaign extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Campaign';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'Campaign';

    protected const API_URI = 'campaign';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
