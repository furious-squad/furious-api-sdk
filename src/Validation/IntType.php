<?php

namespace Furious\FuriousApiSdk\Validation;

class IntType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'integer';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public function isValid(mixed $value)
    {
        if (empty($value)) {
            return true;
        }

        return is_int($value);
    }

    public static function create()
    {
        return new self();
    }
}
