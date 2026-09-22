<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class InvoiceMilestone
 *
 * Represents an invoice milestone resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class InvoiceMilestone extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Invoice milestone";
    protected const CATEGORY_NAME   = "Facture";
    protected const GRAPH_API_NAME  = "InvoiceMilestone";
    
    protected const API_URI         = "invoice-milestone";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_CREATE, self::API_ACTION_UPDATE ];
}