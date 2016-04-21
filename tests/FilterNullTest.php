<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\filter;
use function Akamon\Phunctional\filter_null;

class FilterNullTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider collections
     */
    public function it_should_filter_a_collection_discriminating_nulls($actual, $expected)
    {
        $this->assertSame($expected, filter_null($actual));
    }

    public function collections()
    {
        return [
            'array'           => ['actual' => [1, 2, null], 'expected' => [1, 2]],
            'array_with_keys' => [
                'actual'   => ['one' => 1, 'two' => 2, 'three' => null, 'four' => false],
                'expected' => ['one' => 1, 'two' => 2, 'four' => false],
            ],
            'iterator'        => [
                'actual'   => new ArrayIterator(['one' => 1, 'two' => 2, 'three' => null]),
                'expected' => ['one' => 1, 'two' => 2],
            ],
        ];
    }
}
