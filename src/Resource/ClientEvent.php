<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ClientEvent.
 *
 * Represents a client event resource in the Furious API.
 */
class ClientEvent extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Client event';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'ClientEvent';

    protected const API_URI = 'client-event';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE];
}
