<?php

namespace Furious\FuriousApiSdk\Validation;

class ArrayType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'array';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public function isValid(mixed $value)
    {
        return empty($value) || is_array($value);
    }

    public static function create()
    {
        return new self();
    }
}