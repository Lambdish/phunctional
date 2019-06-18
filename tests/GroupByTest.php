<?php

namespace Lambdish\Phunctional\Tests;

use function Lambdish\Phunctional\group_by;
use PHPUnit_Framework_TestCase;

final class GroupByTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_group_a_collection()
    {
        $coll   = ['one', 'two', 'three'];
        $grouped = [3 => ['one', 'two'], 5 => ['three']];

        $this->assertSame($grouped, group_by('strlen', $coll));
    }
}
