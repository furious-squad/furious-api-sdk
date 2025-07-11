<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class CrmHistory
 *
 * Represents a CRM history resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class CrmHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "CRM History";
    protected const CATEGORY_NAME   = "CRM";
    protected const GRAPH_API_NAME  = "CrmHistory";
    
    protected const API_URI         = "crm-history";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];

}