<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class StandAloneInvoice.
 *
 * Represents a stand-alone invoice resource in the Furious API.
 */
class StandAloneInvoice extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Invoices';
    protected const CATEGORY_NAME = 'Facture';
    protected const GRAPH_API_NAME = 'Invoices';

    protected const API_URI = 'stand-alone-invoice';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
