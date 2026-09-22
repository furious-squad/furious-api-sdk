<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class PurchasePdf.
 *
 * Represents a purchase PDF resource in the Furious API.
 */
class PurchasePdf extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Purchase PDF';
    protected const CATEGORY_NAME = 'Achat';
    protected const GRAPH_API_NAME = 'PurchasePdf';

    protected const API_URI = 'purchase-pdf';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
