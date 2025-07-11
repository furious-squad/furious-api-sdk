<?php

namespace Furious\FuriousApiSdk\Validation;

class StringType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'string';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public function isValid($value)
    {
        return empty($value) || is_string($value);
    }

    public static function create()
    {
        return new self();
    }
}