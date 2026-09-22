<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProposalHistory.
 *
 * Represents a proposal history resource in the Furious API.
 */
class ProposalHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Proposal History';
    protected const CATEGORY_NAME = 'Devis';
    protected const GRAPH_API_NAME = 'ProposalHistory';

    protected const API_URI = 'proposal-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
