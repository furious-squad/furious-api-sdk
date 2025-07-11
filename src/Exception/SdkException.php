<?php

namespace Furious\FuriousApiSdk\Exception;

class SdkException extends \Exception
{
    public function __construct(string $message, int $code = 0)
    {
        parent::__construct($message, $code);
    }
}