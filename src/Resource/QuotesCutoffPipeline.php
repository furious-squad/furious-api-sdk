<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class QuotesCutoffPipeline.
 *
 * Represents a quotes cutoff pipeline resource in the Furious API.
 */
class QuotesCutoffPipeline extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Quotes Cutoff Pipeline';
    protected const CATEGORY_NAME = 'Devis';
    protected const GRAPH_API_NAME = 'QuotesCutoffPipeline';

    protected const API_URI = 'quotes-cutoff-pipeline';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
