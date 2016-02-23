<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\apply;
use function Akamon\Phunctional\last;

class LastTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_value_of_the_last_item_of_a_non_empty_collection($coll, $expected)
    {
        $this->assertSame($expected, last($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_null_on_empty_collection($coll)
    {
        $this->assertNull(last($coll));
    }

    public function getNonEmptyCollections()
    {
        return [
            'array'           => ['coll' => [1, 2], 'expected' => 2],
            'array_with_keys' => ['coll' => ['one' => 1, 'two' => 2], 'expected' => 2],
            'iterator'        => ['coll' => new ArrayIterator([1, 2]), 'expected' => 2],
            'generator'       => ['coll' => apply(function () { yield 1; yield 2; }), 'expected' => 2],
        ];
    }

    public function getEmptyCollections()
    {
        return [
            'array'    => ['coll' => []],
            'iterator' => ['coll' => new ArrayIterator()],
        ];
    }
}
