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
        $expected = [1, 4, 9, 16, 25];

        $this->assertSame($expected, flat_map($this->pow2(), $actual));
    }

    /** @test */
    public function it_should_flat_nested_multidimensional_collection()
    {
        $actual = [1, [2, 3], [4, [5, 6], [[[[[7, 8]]]]]]];

        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8], flat_map($this->pure(), $actual));
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
    private function pow2()
    {
        return function($value) {
            return $value ** 2;
        };
    }
}
