<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Evaluation.
 *
 * Represents the Evaluation resource in the Furious API.
 */
class Evaluation extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Evaluation';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'Evaluation';

    protected const API_URI = 'evaluation';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
