<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class CrmEmail
 *
 * Represents a CRM email resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class CrmEmail extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "CRM Email";
    protected const CATEGORY_NAME   = "CRM";
    protected const GRAPH_API_NAME  = "CRMEmail";
    
    protected const API_URI         = "crm-email";

    protected const API_ALLOWED_ACTIONS     = [];
}