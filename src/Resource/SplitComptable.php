<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class SplitComptable.
 *
 * Represents a split comptable resource in the Furious API.
 */
class SplitComptable extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Split Comptable';
    protected const CATEGORY_NAME = 'Facture';
    protected const GRAPH_API_NAME = 'SplitComptable';

    protected const API_URI = 'split-comptable';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}
