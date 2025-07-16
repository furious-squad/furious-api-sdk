<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class TjmHistory.
 *
 * Represents a TJM history resource in the Furious API.
 */
class TjmHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'TJM History';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'TjmHistory';

    protected const API_URI = 'tjm-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
