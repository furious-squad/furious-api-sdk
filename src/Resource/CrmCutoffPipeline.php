<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class CrmCutoffPipeline.
 *
 * Represents a CRM cutoff pipeline resource in the Furious API.
 */
class CrmCutoffPipeline extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'CRM Cutoff Pipeline';
    protected const CATEGORY_NAME = 'CRM';
    protected const GRAPH_API_NAME = 'CRMCutoffPipeline';

    protected const API_URI = 'crm-cutoff-pipeline';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
