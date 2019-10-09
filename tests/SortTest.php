<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\sort;

final class SortTest extends TestCase
{
    /** @test */
    public function it_should_sort_a_collection(): void
    {
        $coll   = [9, 1, 2, 3, 4, 1, 5, 6, 7, 4, 9, 8];
        $sorted = [1, 1, 2, 3, 4, 4, 5, 6, 7, 8, 9, 9];

        $this->assertSame($sorted, sort($this->rank(), $coll));
    }

    /** @test */
    public function it_should_sort_an_empty_collection(): void
    {
        $this->assertSame([], sort($this->rank(), new ArrayIterator()));
    }

    private function rank(): callable
    {
        return static function ($one, $other) {
            return $one === $other ? 0 : ($one > $other ? 1 : -1);
        };
    }
}
