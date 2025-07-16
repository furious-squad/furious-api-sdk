<?php

namespace Furious\FuriousApiSdk\Validation;

class DateType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'date';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public static function create(string $format = 'Y-m-d')
    {
        return new self();
    }
}
