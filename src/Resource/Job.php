<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class Job.
 *
 * Represents a job resource in the Furious API.
 */
class Job extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Candidate';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'Candidate';

    protected const API_URI = 'candidate';

    protected const API_ALLOWED_ACTIONS = [];
}
