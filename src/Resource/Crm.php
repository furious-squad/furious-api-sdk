<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Crm.
 *
 * Represents a CRM resource in the Furious API.
 */
class Crm extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'CRM';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'Clients';

    protected const API_URI = 'crm';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
