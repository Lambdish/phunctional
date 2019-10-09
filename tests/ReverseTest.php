<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\reverse;

final class ReverseTest extends TestCase
{
    /** @test */
    public function it_should_reverse_an_array_preserving_the_keys(): void
    {
        $coll = [1, 2, 3, 4, 5];

        $this->assertSame([4 => 5, 3 => 4, 2 => 3, 1 => 2, 0 => 1], reverse($coll));
    }

    /** @test */
    public function it_should_reverse_a_traversable(): void
    {
        $coll = new ArrayIterator([1, 2, 3, 4, 5]);

        $this->assertSame([4 => 5, 3 => 4, 2 => 3, 1 => 2, 0 => 1], reverse($coll));
    }
}
