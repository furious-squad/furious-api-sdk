<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class PurchaseVatExt
 *
 * Represents a purchase VAT extension resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class PurchaseVatExt extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Purchase-Vat-Ext";
    protected const CATEGORY_NAME   = "Achat";
    protected const GRAPH_API_NAME  = "Purchase-Vat-Ext";
    
    protected const API_URI         = "purchase-vat-ext";

    protected const API_ALLOWED_ACTIONS     = [];
}