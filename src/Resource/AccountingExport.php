<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class AccountingExport
 *
 * Represents an accounting export resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class AccountingExport extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Accounting Export";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "AccountingExport";
    
    protected const API_URI         = "accounting-export";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}