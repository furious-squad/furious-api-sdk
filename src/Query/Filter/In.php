<?php

namespace Furious\FuriousApiSdk\Query\Filter;

class In extends AbstractFieldFilter
{
    protected const FILTER_OPERATOR = 'in';

    /**
     * __construct.
     *
     * @param string $fieldValue
     */
    protected function __construct(string $fieldName, array $fieldValue)
    {
        parent::__construct($fieldName, self::FILTER_OPERATOR, $fieldValue);
    }

    /**
     * set.
     *
     * @param string $fieldValue
     */
    public static function set(string $fieldName, array $fieldValue)
    {
        return new self($fieldName, $fieldValue);
    }
}
