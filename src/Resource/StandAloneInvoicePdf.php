<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class StandAloneInvoicePdf
 *
 * Represents a stand-alone invoice PDF resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class StandAloneInvoicePdf extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Invoices PDF";
    protected const CATEGORY_NAME   = "Facture";
    protected const GRAPH_API_NAME  = "InvoicesPdf";
    
    protected const API_URI         = "stand-alone-invoice-pdf";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}