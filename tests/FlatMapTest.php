<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\flat_map;

class FlatMapTest extends PHPUnit_Framework_TestCase
{

    /** @test */
    public function it_should_allow_one_multidimensional_collection()
    {
        $actual = [1, 2, 3, 4, 5];

        $this->assertSame($actual, flat_map($this->pure(), $actual));
    }

    /** @test */
    public function it_should_flat_nested_multidimensional_collection()
    {
        $actual = [1, [2, 3], [4, [5, 6], [[[[[7, 8]]]]]]];

        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8], flat_map($this->pure(), $actual));
    }

    /** @test */
    public function it_should_return_apply_a_function_the_values_of_a_collection_and_flatten_the_results()
    {
        $actual = [1, [2, 3], [4, [5, 6], [[[[[7, 8]]]]]]];
        $expected = [1, 4, 9, 16, 25, 36, 49, 64];

        $this->assertSame($expected, flat_map($this->square(), $actual));
    }

    /**
     * @return \Closure
     */
    private function pure()
    {
        return function($value) {
            return $value;
        };
    }

    /**
     * @return \Closure
     */
    private function square()
    {
        return function($value) {
            return $value * $value;
        };
    }
}
