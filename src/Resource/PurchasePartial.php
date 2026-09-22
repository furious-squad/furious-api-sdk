<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class PurchasePartial.
 *
 * Represents a purchase partial resource in the Furious API.
 */
class PurchasePartial extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Purchase Partial';
    protected const CATEGORY_NAME = 'Achat';
    protected const GRAPH_API_NAME = 'PurchasePartial';

    protected const API_URI = 'purchase-partial';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
