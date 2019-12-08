<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\reduce;

final class ReduceTest extends TestCase
{
    /** @test */
    public function it_should_reduce_the_values_of_a_collection_after_apply_a_function(): void
    {
        $coll = [1, 2, 3, 4, 5];
        $fn   = $this->sum();

        $this->assertSame(15, reduce($fn, $coll));
    }

    /** @test */
    public function it_should_reduce_the_values_of_a_collection_after_apply_a_function_using_an_initial_value(): void
    {
        $coll    = [1, 2, 3, 4, 5];
        $initial = 5;
        $fn      = $this->sum();

        $this->assertSame(20, reduce($fn, $coll, $initial));
    }

    /** @test */
    public function it_should_allow_reduce_the_values_of_a_collection_depending_on_the_key_of_each_value(): void
    {
        $coll    = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five'];
        $initial = '';
        $fn      = $this->concatValuesOfOddKeys();

        $this->assertSame('one three five', reduce($fn, $coll, $initial));
    }

    private function sum(): callable
    {
        return static function ($acc, $value) {
            return $acc + $value;
        };
    }

    private function concatValuesOfOddKeys(): callable
    {
        return static function ($acc, $value, $key) {
            return $key % 2 === 1
                ? trim($acc . ' ' . $value)
                : $acc;
        };
    }
}
