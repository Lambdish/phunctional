<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\identity;

final class IdentityTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_a_value()
    {
        $value = 5;
        $identityClosure  = identity($value);

        $this->assertSame($value, $identityClosure());
    }

    /** @test */
    public function it_should_return_same_value_if_called_twice()
    {
        $value = 5;
        $identityClosure  = identity($value);

        $identityClosure();

        $this->assertSame($value, $identityClosure());
    }
}
