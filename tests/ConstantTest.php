<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\constant;

final class ConstantTest extends TestCase
{
    /** @test */
    public function it_should_return_a_value(): void
    {
        $value           = 5;
        $constantClosure = constant($value);

        $this->assertSame($value, $constantClosure());
    }

    /** @test */
    public function it_should_return_same_value_if_called_twice(): void
    {
        $value           = 5;
        $constantClosure = constant($value);

        $constantClosure();

        $this->assertSame($value, $constantClosure());
    }
}
