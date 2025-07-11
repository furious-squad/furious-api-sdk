<?php

namespace Furious\FuriousApiSdk\Query\Filter;


class Greatest extends AbstractFieldFilter
{
    protected const FILTER_OPERATOR = 'gt';
    
    /**
     * __construct
     *
     * @param  string $fieldName
     * @param  string $fieldValue
     * @return void
     */
    protected function __construct(string $fieldName, string $fieldValue)
    {
        parent::__construct($fieldName, self::FILTER_OPERATOR, $fieldValue);
    }

    /**
     * set
     *
     * @param  string $fieldName
     * @param  string $fieldValue
     * @return self
     */
    public static function set(string $fieldName, string $fieldValue)
    {
        return new self($fieldName, $fieldValue);
    }
}