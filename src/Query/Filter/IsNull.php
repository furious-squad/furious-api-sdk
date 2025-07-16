<?php

namespace Furious\FuriousApiSdk\Query\Filter;

class IsNull extends AbstractFieldFilter
{
    protected const FILTER_OPERATOR = 'null';

    /**
     * __construct.
     */
    protected function __construct(string $fieldName, bool $fieldValue)
    {
        parent::__construct($fieldName, self::FILTER_OPERATOR, $fieldValue);
    }

    /**
     * set.
     */
    public static function set(string $fieldName, ?bool $fieldValue = null)
    {
        if (!$fieldValue) {
            $fieldValue = true; // Par défaut, on considère que l'on cherche les valeurs nulles
        }

        return new self($fieldName, $fieldValue);
    }
}
