<?php

use Furious\FuriousApiSdk\Validation\ArrayType;
use Furious\FuriousApiSdk\Validation\BoolType;
use Furious\FuriousApiSdk\Validation\FloatType;
use Furious\FuriousApiSdk\Validation\IntType;
use Furious\FuriousApiSdk\Validation\StringType;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for validation type classes.
 *
 * Verifies that each type validator (StringType, IntType, FloatType, BoolType, ArrayType)
 * correctly accepts valid values and rejects invalid ones.
 *
 * @internal
 *
 * @coversNothing
 */
class FuriousTypeTest extends TestCase
{
    /**
     * Ensures StringType accepts valid strings, including empty,
     * rejects non-strings, and allows null values.
     *
     * @covers \Furious\FuriousApiSdk\Validation\StringType::create
     * @covers \Furious\FuriousApiSdk\Validation\StringType::isValid
     */
    public function testStringType(): void
    {
        $type = StringType::create();
        $this->assertTrue($type->isValid('hello'));
        $this->assertTrue($type->isValid(''));
        $this->assertFalse($type->isValid(42));
        $this->assertTrue($type->isValid(null));
    }

    /**
     * Ensures IntType accepts integers, rejects non-integers such as strings,
     * and allows null values.
     *
     * @covers \Furious\FuriousApiSdk\Validation\IntType::create
     * @covers \Furious\FuriousApiSdk\Validation\IntType::isValid
     */
    public function testIntType(): void
    {
        $type = IntType::create();
        $this->assertTrue($type->isValid(123));
        $this->assertFalse($type->isValid('123'));
        $this->assertTrue($type->isValid(null));
    }

    /**
     * Ensures FloatType accepts floating-point numbers,
     * rejects non-floats such as numeric strings,
     * and allows null values.
     *
     * @covers \Furious\FuriousApiSdk\Validation\FloatType::create
     * @covers \Furious\FuriousApiSdk\Validation\FloatType::isValid
     */
    public function testFloatType(): void
    {
        $type = FloatType::create();
        $this->assertTrue($type->isValid(3.14));
        $this->assertFalse($type->isValid('3.14'));
        $this->assertTrue($type->isValid(null));
    }

    /**
     * Ensures BoolType accepts boolean values (true/false),
     * rejects non-boolean inputs such as strings,
     * and allows null values.
     *
     * @covers \Furious\FuriousApiSdk\Validation\BoolType::create
     * @covers \Furious\FuriousApiSdk\Validation\BoolType::isValid
     */
    public function testBoolType(): void
    {
        $type = BoolType::create();
        $this->assertTrue($type->isValid(true));
        $this->assertTrue($type->isValid(false));
        $this->assertFalse($type->isValid('true'));
        $this->assertTrue($type->isValid(null));
    }

    /**
     * Ensures ArrayType accepts arrays (empty or filled),
     * rejects non-array values such as strings.
     *
     * @covers \Furious\FuriousApiSdk\Validation\ArrayType::create
     * @covers \Furious\FuriousApiSdk\Validation\ArrayType::isValid
     */
    public function testArrayType(): void
    {
        $type = ArrayType::create();
        $this->assertTrue($type->isValid([]));
        $this->assertTrue($type->isValid(['a', 'b']));
        $this->assertFalse($type->isValid('not an array'));
    }
}
