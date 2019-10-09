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
}
