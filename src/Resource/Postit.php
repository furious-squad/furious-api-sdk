<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Postit.
 */
class Postit extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Postit';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'Postit';

    protected const API_URI = 'postit';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE];
}
