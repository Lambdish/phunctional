<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\reverse;

final class ReverseTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_reverse_an_array_preserving_the_keys()
    {
        $coll = [1, 2, 3, 4, 5];

        $this->assertSame(
            [4 => 5, 3 => 4, 2 => 3, 1 => 2, 0 => 1],
            reverse($coll)
        );
    }

    /** @test */
    public function it_should_reverse_a_traversable()
    {
        $coll = new ArrayIterator([1, 2, 3, 4, 5]);

        $this->assertSame(
            [4 => 5, 3 => 4, 2 => 3, 1 => 2, 0 => 1],
            reverse($coll)
        );
    }
}
