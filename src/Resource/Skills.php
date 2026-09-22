<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Skills.
 *
 * Represents a skills resource in the Furious API.
 */
class Skills extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Skills';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'Skills';

    protected const API_URI = 'skills';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}
