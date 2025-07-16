<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class PartialStandAloneInvoice.
 *
 * Represents a resource for managing partial stand-alone invoices in the Furious API.
 */
class PartialStandAloneInvoice extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Partial Invoices';
    protected const CATEGORY_NAME = 'Facture';
    protected const GRAPH_API_NAME = 'PartialInvoices';

    protected const API_URI = 'partial-stand-alone-invoice';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_DELETE];
}
