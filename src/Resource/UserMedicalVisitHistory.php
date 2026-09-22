<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserMedicalVisitHistory.
 *
 * Represents a user medical visit history resource in the Furious API.
 */
class UserMedicalVisitHistory extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Medical Visit History';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserMedicalVisitHistory';

    protected const API_URI = 'user-medical-visit-history';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH];
}
