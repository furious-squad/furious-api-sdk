<?php

namespace Furious\FuriousApiSdk\Query\Order;


class OrderAsc extends AbstractFieldOrder
{
    private const ORDER_FIELD_DIRECTION = 'asc';
    
    /**
     * __construct
     *
     * @param  string $fieldName
     * @return void
     */
    protected function __construct(string $fieldName)
    {
        parent::__construct($fieldName, self::ORDER_FIELD_DIRECTION);
    }
    
    /**
     * field
     *
     * @param  string $fieldName
     * @return void
     */
    public static function field(string $fieldName)
    {
        return new self($fieldName, self::ORDER_FIELD_DIRECTION);
    }
}