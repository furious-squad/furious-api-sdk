<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class PurchaseVatExt.
 *
 * Represents a purchase VAT extension resource in the Furious API.
 */
class PurchaseVatExt extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Purchase-Vat-Ext';
    protected const CATEGORY_NAME = 'Achat';
    protected const GRAPH_API_NAME = 'Purchase-Vat-Ext';

    protected const API_URI = 'purchase-vat-ext';

    protected const API_ALLOWED_ACTIONS = [];
}
