<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\any;

final class AnyTest extends TestCase
{
    /** @test */
    public function it_should_return_false_if_any_value_satisfies_the_predicate(): void
    {
        $coll = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertFalse(any($fn, $coll));
    }

    /** @test */
    public function it_should_return_true_if_any_value_satisfies_the_predicate(): void
    {
        $coll = [25, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertTrue(any($fn, $coll));
    }

    private function isGreaterThanTen(): callable
    {
        return static function ($number) {
            return $number > 10;
        };
    }
}
