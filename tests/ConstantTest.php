<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\constant;

final class ConstantTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_a_value()
    {
        $value = 5;
        $pureClosure  = constant($value);

        $this->assertSame($value, $pureClosure());
    }

    /** @test */
    public function it_should_return_same_value_if_called_twice()
    {
        $value = 5;
        $pureClosure  = constant($value);

        $pureClosure();

        $this->assertSame($value, $pureClosure());
    }
}
