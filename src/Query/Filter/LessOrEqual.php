<?php

namespace Furious\FuriousApiSdk\Query\Filter;

class LessOrEqual extends AbstractFieldFilter
{
    protected const FILTER_OPERATOR = 'leq';

    /**
     * __construct.
     */
    protected function __construct(string $fieldName, string $fieldValue)
    {
        parent::__construct($fieldName, self::FILTER_OPERATOR, $fieldValue);
    }

    /**
     * set.
     */
    public static function set(string $fieldName, string $fieldValue)
    {
        return new self($fieldName, $fieldValue);
    }
}
