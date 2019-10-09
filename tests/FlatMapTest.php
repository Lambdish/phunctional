<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\flat_map;

final class FlatMapTest extends TestCase
{
    /** @test */
    public function it_should_apply_and_then_flatten(): void
    {
        $actual   = [2, 3, 4];
        $expected = [1, 2, 1, 2, 3, 1, 2, 3, 4];

        $naturalRange = static function ($value) {
            return range(1, $value);
        };

        $this->assertSame($expected, flat_map($naturalRange, $actual));
    }

    /** @test */
    public function it_should_allow_receive_the_key_in_the_function_to_apply(): void
    {
        $actual   = [4 => 1, 9 => 5];
        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        $this->assertSame($expected, flat_map('range', $actual));
    }
}
