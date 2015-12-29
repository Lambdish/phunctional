<?php

namespace Akamon\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\assoc;

final class AssocTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_assoc_a_value_to_an_empty_array()
    {
        $this->assertEquals(['akamon' => 'This is an easter egg'], assoc([], 'akamon', 'This is an easter egg'));
    }

    /** @test */
    public function it_should_overwrite_an_existing_key_on_assoc()
    {
        $coll = [1992 => 'Barcelona', 2012 => 'Madrid'];

        $this->assertEquals([1992 => 'Barcelona', 2012 => 'London'], assoc($coll, 2012, 'London'));
    }

    /** @test */
    public function it_should_assoc_a_value_on_a_traversable()
    {
        $coll = new ArrayIterator([2016 => 'Madrid']);

        $this->assertEquals([2016 => 'Brazil'], assoc($coll, 2016, 'Brazil'));
    }
}
