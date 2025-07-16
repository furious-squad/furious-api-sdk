<?php

namespace Furious\FuriousApiSdk\Query\Filter;

class Less extends AbstractFieldFilter
{
    protected const FILTER_OPERATOR = 'le';

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
