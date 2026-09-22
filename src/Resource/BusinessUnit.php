<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class BusinessUnit.
 *
 * Represents a business unit resource in the Furious API.
 */
class BusinessUnit extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Business Unit';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'BusinessUnit';

    protected const API_URI = 'business-unit';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
