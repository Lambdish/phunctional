<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\memoize;

final class MemoizeTest extends TestCase
{
    /** @test */
    public function it_should_call_return_the_value_of_the_called_function_caching_the_result(): void
    {
        $previousValue = memoize($this->functionWithRandReturn(), 1, 1000000);

        $this->assertSame($previousValue, memoize($this->functionWithRandReturn(), 1, 1000000));
    }

    /** @test */
    public function it_should_reset_the_cache_if_function_to_be_executed_is_null(): void
    {
        $previousValue = memoize($this->functionWithRandReturn(), 1, 1000000);

        memoize(null);

        $this->assertNotSame($previousValue, memoize($this->functionWithRandReturn(), 1, 1000000));
    }

    /**
     * @test
     * @dataProvider fibonacciValues
     */
    public function it_should_run_fibonacci_using_memoize($number, $fibonacci): void
    {
        $this->assertSame($fibonacci, apply($this->functionFibonacciMemoized(), [$number]));
    }

    public function fibonacciValues(): array
    {
        return [
            [30, 832040],
            [18, 2584],
            [3, 2],
            [2, 1],
            [1, 1],
        ];
    }

    private function functionWithRandReturn(): callable
    {
        return static function ($min, $max) {
            return random_int($min, $max);
        };
    }

    private function functionFibonacciMemoized(): callable
    {
        return $memoizedFibonacci = static function ($number) use (&$memoizedFibonacci) {
            return $number < 2
                ? $number
                : memoize($memoizedFibonacci, $number - 1) + memoize($memoizedFibonacci, $number - 2);
        };
    }
}
