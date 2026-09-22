<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Faq.
 *
 * Represents a FAQ resource in the Furious API.
 */
class Faq extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Faq';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'Faq';

    protected const API_URI = 'faq';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE];
}
