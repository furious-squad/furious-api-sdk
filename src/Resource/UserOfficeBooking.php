<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class UserOfficeBooking.
 *
 * Represents a user office booking resource in the Furious API.
 */
class UserOfficeBooking extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'User Office Booking';
    protected const CATEGORY_NAME = 'RH';
    protected const GRAPH_API_NAME = 'UserOfficeBooking';

    protected const API_URI = 'user-office-booking';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_SEARCH];
}
