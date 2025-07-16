<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class ProjectDocument.
 *
 * Represents a project document resource in the Furious API.
 */
class ProjectDocument extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Document';
    protected const CATEGORY_NAME = 'Projet';
    protected const GRAPH_API_NAME = 'Document';

    protected const API_URI = 'document';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
