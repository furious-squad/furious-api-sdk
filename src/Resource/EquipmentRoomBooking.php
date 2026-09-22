<?php

namespace Furious\FuriousApiSdk\Resource;

/**
 * Class EquipmentRoomBooking.
 *
 * Represents the Equipment Room Booking resource in the Furious API.
 */
class EquipmentRoomBooking extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Equipment Room Booking';
    protected const CATEGORY_NAME = '';
    protected const GRAPH_API_NAME = 'EquipmentRoomBooking';

    protected const API_URI = 'equipment-room-booking';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_CREATE, self::API_ACTION_SEARCH, self::API_ACTION_UPDATE, self::API_ACTION_DELETE];
}
