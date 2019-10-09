<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\some;

final class SomeTest extends TestCase
{
    /** @test */
    public function it_should_return_false_if_some_value_satisfies_the_predicate(): void
    {
        $coll = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertFalse(some($fn, $coll));
    }

    /** @test */
    public function it_should_return_true_if_some_value_satisfies_the_predicate(): void
    {
        $coll = [25, 2, 3, 4, 5, 6, 7, 8, 9];
        $fn   = $this->isGreaterThanTen();

        $this->assertTrue(some($fn, $coll));
    }

    /** @test */
    public function it_should_return_true_if_some_value_satisfies_the_predicate_using_the_key(): void
    {
        $coll = ['one' => 1, 'two' => 2];
        $fn   = $this->isOne();

        $this->assertTrue(some($fn, $coll));
    }

    private function isGreaterThanTen(): callable
    {
        return static function ($number) {
            return $number > 10;
        };
    }

    private function isOne(): callable
    {
        return static function ($value, $key) {
            return 'one' === $key;
        };
    }
}
