<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class SprintCategory.
 *
 * Represents a sprint category resource in the Furious API.
 */
class SprintCategory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Sprint Category';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'SprintCategory';

    protected const API_URI = 'sprint-category';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
