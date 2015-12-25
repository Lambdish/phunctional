<?php
namespace Akamon\Phunctional\Tests;

use function Akamon\Phunctional\reindex;
use PHPUnit_Framework_TestCase;

final class ReindexTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_reindex_a_collection()
    {
        $coll = ['a', 'b', 'c'];

        $this->assertEquals(['a' => 'a', 'b' => 'b', 'c' => 'c'], reindex($this->identity(), $coll));
    }

    /** @test */
    public function it_should_reindex_a_collection_using_its_keys()
    {
        $coll = [1 => 2, 3 => 4, 5 => 6];

        $this->assertEquals([2 => 2, 12 => 4, 30 => 6], reindex($this->valueAndKeyMultiplier(), $coll));
    }

    private function identity()
    {
        return function ($value) {
            return $value;
        };
    }

    private function valueAndKeyMultiplier()
    {
        return function ($value, $key) {
            return $value * $key;
        };
    }
}
