<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\apply;
use function Akamon\Phunctional\rest;

class RestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_rest_of_the_collection_preserving_the_keys($coll)
    {
        $this->assertSame([1 => 2, 2 => 3], rest($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_an_empty_collection_with_empty_collections($coll)
    {
        $this->assertSame([], rest($coll));
    }

    /**
     * @test
     * @dataProvider getOneElementCollections
     */
    public function it_should_return_an_empty_collection_with_one_element_collections($coll)
    {
        $this->assertSame([], rest($coll));
    }

    public function getNonEmptyCollections()
    {
        return [
            'array'     => ['coll' => [1, 2, 3]],
            'iterator'  => ['coll' => new ArrayIterator([1, 2, 3])],
            'generator' => ['coll' => $this->generator(1, 2, 3)],
        ];
    }

    public function getEmptyCollections()
    {
        return [
            'array'     => ['coll' => []],
            'iterator'  => ['coll' => new ArrayIterator([])],
            'generator' => ['coll' => $this->generator()],
        ];
    }

    public function getOneElementCollections()
    {
        return [
            'array'     => ['coll' => [1]],
            'iterator'  => ['coll' => new ArrayIterator([1])],
            'generator' => ['coll' => $this->generator(1)],
        ];
    }

    private function generator(...$items)
    {
        return apply(
            function () use ($items) {
                foreach ($items as $item) {
                    yield $item;
                }
            }
        );
    }
}
