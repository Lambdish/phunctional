<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\reindex;

final class ReindexTest extends TestCase
{
    /** @test */
    public function it_should_reindex_a_collection(): void
    {
        $coll = ['a', 'b', 'c'];

        $this->assertEquals(['a' => 'a', 'b' => 'b', 'c' => 'c'], reindex($this->identity(), $coll));
    }

    /** @test */
    public function it_should_reindex_a_collection_using_its_keys(): void
    {
        $coll = [1 => 2, 3 => 4, 5 => 6];

        $this->assertEquals([2 => 2, 12 => 4, 30 => 6], reindex($this->valueAndKeyMultiplier(), $coll));
    }

    private function identity(): callable
    {
        return static function ($value) {
            return $value;
        };
    }

    private function valueAndKeyMultiplier(): callable
    {
        return static function ($value, $key) {
            return $value * $key;
        };
    }
}
