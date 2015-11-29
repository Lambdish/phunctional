<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\some;

final class SomeTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_false_if_some_value_satisfies_the_predicate()
    {
        $coll = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertFalse(some($fn, $coll));
    }

    /** @test */
    public function it_should_return_true_if_some_value_satisfies_the_predicate()
    {
        $coll = [25, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertTrue(some($fn, $coll));
    }

    private function isGreaterThanTen()
    {
        return function ($number) {
            return $number > 10;
        };
    }
}
