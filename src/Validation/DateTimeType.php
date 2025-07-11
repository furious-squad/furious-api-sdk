<?php

namespace Furious\FuriousApiSdk\Validation;

class DateTimeType extends AbstractFieldType
{
    private const API_FIELD_TYPE = 'datetime';

    public function __construct()
    {
        parent::__construct(self::API_FIELD_TYPE);
    }

    public static function create(string $format = 'Y-m-d H:i:s')
    {
        return new self();
    }
}