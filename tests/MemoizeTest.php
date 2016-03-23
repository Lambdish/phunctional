<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\apply;
use function Akamon\Phunctional\memoize;

final class MemoizeTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_call_return_the_value_of_the_called_function_caching_the_result()
    {
        $previousValue = memoize($this->functionWithRandReturn(), 1, 1000000);

        $this->assertSame($previousValue, memoize($this->functionWithRandReturn(), 1, 1000000));
    }

    /** @test */
    public function it_should_reset_the_cache_if_function_to_be_executed_is_null()
    {
        $previousValue = memoize($this->functionWithRandReturn(), 1, 1000000);

        memoize();

        $this->assertNotSame($previousValue, memoize($this->functionWithRandReturn(), 1, 1000000));
    }

    /**
     * @test
     * @dataProvider fibonacciValues
     */
    public function it_should_call_fibonacci($number, $fibonacci)
    {
        $this->assertSame($fibonacci, apply($this->functionFibonacciMemoized(), [$number]));
    }

    private function functionWithRandReturn()
    {
        return function ($min, $max) {
            return rand($min, $max);
        };
    }

    private function functionFibonacciMemoized()
    {
        return $memoizedFibonacci = function ($number) use (&$memoizedFibonacci) {
            return $number < 2 ? $number :
                memoize($memoizedFibonacci, $number - 1) + memoize($memoizedFibonacci, $number - 2);
        };
    }

    public function fibonacciValues()
    {
        return [
            [30, 832040],
            [18, 2584],
            [3, 2],
            [2, 1],
            [1, 1],
        ];
    }
}
