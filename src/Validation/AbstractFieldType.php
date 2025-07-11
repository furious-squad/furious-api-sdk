<?php

namespace Furious\FuriousApiSdk\Validation;

abstract class AbstractFieldType
{
    protected string $fieldType;

    public function __construct(string $fieldType)
    {
        $this->fieldType = $fieldType;
    }

    abstract public static function create();
}