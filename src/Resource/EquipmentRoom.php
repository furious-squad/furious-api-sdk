<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class EquipmentRoom
 *
 * Represents the Equipment Room resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class EquipmentRoom extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Equipment Room";
    protected const CATEGORY_NAME   = "";
    protected const GRAPH_API_NAME  = "EquipmentRoom";
    
    protected const API_URI         = "equipment-room";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_SEARCH ];
}