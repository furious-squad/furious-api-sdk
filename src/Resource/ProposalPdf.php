<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProposalPdf.
 *
 * Represents a proposal PDF resource in the Furious API.
 */
class ProposalPdf extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Proposal PDF';
    protected const CATEGORY_NAME = 'Devis';
    protected const GRAPH_API_NAME = 'ProposalPdf';

    protected const API_URI = 'proposal-pdf';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
