<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class PurchaseType.
 *
 * Represents a purchase type resource in the Furious API.
 */
class PurchaseType extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'PurchaseType';
    protected const CATEGORY_NAME = 'Achat';
    protected const GRAPH_API_NAME = 'PurchaseType';

    protected const API_URI = 'purchase-type';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
