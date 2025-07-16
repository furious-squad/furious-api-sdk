<?php

namespace Furious\FuriousApiSdk\Validation;

class BoolType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'boolean';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public function isValid(mixed $value)
    {
        return empty($value) || is_bool($value) || (is_int($value) && in_array($value, [0, 1]));
    }

    public static function create()
    {
        return new self();
    }
}
