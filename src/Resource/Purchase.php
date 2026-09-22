<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Purchase.
 *
 * Represents a purchase resource in the Furious API.
 */
class Purchase extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Purchase';
    protected const CATEGORY_NAME = 'Achat';
    protected const GRAPH_API_NAME = 'Purchase';

    protected const API_URI = 'purchase';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
