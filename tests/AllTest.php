<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\all;

final class AllTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_true_if_the_predicate_is_satisfactory()
    {
        $numbers = [7, 9, 14, 12, 6];

        $this->assertTrue(all($this->isGreaterThanFive(), $numbers));
    }

    /** @test */
    public function it_should_return_false_if_any_value_is_not_satisfactory()
    {
        $numbers = [2, 3, 14, 12, 6];

        $this->assertFalse(all($this->isGreaterThanFive(), $numbers));
    }

    private function isGreaterThanFive()
    {
        return function ($number) {
            return $number > 5;
        };
    }
}
