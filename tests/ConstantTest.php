<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\constant;

final class ConstantTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_a_value()
    {
        $value           = 5;
        $constantClosure = constant($value);

        $this->assertSame($value, $constantClosure());
    }

    /** @test */
    public function it_should_return_same_value_if_called_twice()
    {
        $value           = 5;
        $constantClosure = constant($value);

        $constantClosure();

        $this->assertSame($value, $constantClosure());
    }
}
