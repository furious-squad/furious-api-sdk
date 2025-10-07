<?php

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Exception\SdkException;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for SDK-specific exceptions.
 *
 * Verifies that custom exceptions extend \Exception
 * and preserve the provided message and code values.
 *
 * @internal
 *
 * @coversNothing
 */
class FuriousExceptionTest extends TestCase
{
    /**
     * Ensures that SdkException correctly stores and exposes
     * the provided message and code, while extending \Exception.
     *
     * @covers \Furious\FuriousApiSdk\Exception\SdkException::__construct
     */
    public function testSdkExceptionMessageAndCode(): void
    {
        $exception = new SdkException('Something went wrong', 123);

        $this->assertInstanceOf(Exception::class, $exception);
        $this->assertEquals('Something went wrong', $exception->getMessage());
        $this->assertEquals(123, $exception->getCode());
    }

    /**
     * Ensures that ApiException correctly stores and exposes
     * the provided message and code, while extending \Exception.
     *
     * @covers \Furious\FuriousApiSdk\Exception\ApiException::__construct
     */
    public function testApiExceptionMessageAndCode(): void
    {
        $exception = new ApiException('API failed', 500);

        $this->assertInstanceOf(Exception::class, $exception);
        $this->assertEquals('API failed', $exception->getMessage());
        $this->assertEquals(500, $exception->getCode());
    }
}
