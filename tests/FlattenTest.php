<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\flatten;

final class FlattenTest extends TestCase
{
    /** @test */
    public function it_should_flat_a_two_multidimensional_collection(): void
    {
        $actual = [[1], [2], [3], [4], [5]];

        $this->assertSame([1, 2, 3, 4, 5], flatten($actual));
    }

    /** @test */
    public function it_should_allow_one_multidimensional_collection(): void
    {
        $actual = [1, 2, 3, 4, 5];

        $this->assertSame($actual, flatten($actual));
    }

    /** @test */
    public function it_should_flat_nested_multidimensional_collection(): void
    {
        $actual = [1, [2, 3], [4, [5, 6], [[[[[7, 8]]]]]]];

        $this->assertSame([1, 2, 3, 4, 5, 6, 7, 8], flatten($actual));
    }
}
