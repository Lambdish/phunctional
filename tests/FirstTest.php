<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\call;
use function Akamon\Phunctional\first;

class FirstTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_value_of_the_first_item_of_a_non_empty_collection($coll)
    {
        $this->assertSame(1, first($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_null_on_empty_collection($coll)
    {
        $this->assertNull(first($coll));
    }

    public function getNonEmptyCollections()
    {
        return [
            'array'           => ['coll' => [1, 2]],
            'array_with_keys' => ['coll' => ['one' => 1, 'two' => 2]],
            'iterator'        => ['coll' => new ArrayIterator([1, 2])],
            'generator'       => ['coll' => call(function () { yield 1; yield 2; })],
        ];
    }

    /** @todo add a data set for an empty generator */
    public function getEmptyCollections()
    {
        return [
            'array'    => ['coll' => []],
            'iterator' => ['coll' => new ArrayIterator()],
        ];
    }
}
