<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\group_by;

final class GroupByTest extends TestCase
{
    /** @test */
    public function it_should_group_a_collection(): void
    {
        $coll    = ['one', 'two', 'three'];
        $grouped = [3 => ['one', 'two'], 5 => ['three']];

        $this->assertSame($grouped, group_by('strlen', $coll));
    }
}
