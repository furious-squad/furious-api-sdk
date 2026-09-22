<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class QuotesCutoff.
 *
 * Represents a quotes cutoff resource in the Furious API.
 */
class QuotesCutoff extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Quotes Cutoff';
    protected const CATEGORY_NAME = 'Devis';
    protected const GRAPH_API_NAME = 'QuotesCutoff';

    protected const API_URI = 'quotes-cutoff';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
