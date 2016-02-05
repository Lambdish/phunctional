<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\sort;

final class SortTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_sort_a_collection()
    {
        $coll   = [9, 1, 2, 3, 4, 1, 5, 6, 7, 4, 9, 8];
        $sorted = [1, 1, 2, 3, 4, 4, 5, 6, 7, 8, 9, 9];

        $this->assertSame($sorted, sort($this->rank(), $coll));
    }

    /** @test */
    public function it_should_sort_an_empty_collection()
    {
        $this->assertSame([], sort($this->rank(), new ArrayIterator()));
    }

    private function rank()
    {
        return function ($one, $other) {
            return $one === $other ? 0 : ($one > $other ? 1 : -1);
        };
    }
}
