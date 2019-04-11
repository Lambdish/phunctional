<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\identity;

final class IdentityTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_a_same_value_is_passed_as_argument()
    {
        $value = 5;

        $this->assertSame(5, identity($value));
    }
}
