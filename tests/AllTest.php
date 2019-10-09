<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\all;

final class AllTest extends TestCase
{
    /** @test */
    public function it_should_return_true_if_the_predicate_is_satisfactory(): void
    {
        $numbers = [7, 9, 14, 12, 6];

        $this->assertTrue(all($this->isGreaterThanFive(), $numbers));
    }

    /** @test */
    public function it_should_return_false_if_any_value_is_not_satisfactory(): void
    {
        $numbers = [2, 3, 14, 12, 6];

        $this->assertFalse(all($this->isGreaterThanFive(), $numbers));
    }

    private function isGreaterThanFive(): callable
    {
        return static function ($number) {
            return $number > 5;
        };
    }
}
