<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Proposal.
 *
 * Represents a proposal resource in the Furious API.
 */
class Proposal extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Proposal';
    protected const CATEGORY_NAME = 'Devis';
    protected const GRAPH_API_NAME = 'Proposal';

    protected const API_URI = 'proposal';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE];
}
