<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\assoc;

final class AssocTest extends TestCase
{
    /** @test */
    public function it_should_assoc_a_value_to_an_empty_array(): void
    {
        $this->assertEquals(['lambdish' => 'This is an easter egg'], assoc([], 'lambdish', 'This is an easter egg'));
    }

    /** @test */
    public function it_should_overwrite_an_existing_key_on_assoc(): void
    {
        $coll = [1992 => 'Barcelona', 2012 => 'Madrid'];

        $this->assertEquals([1992 => 'Barcelona', 2012 => 'London'], assoc($coll, 2012, 'London'));
    }

    /** @test */
    public function it_should_assoc_a_value_on_a_traversable(): void
    {
        $coll = new ArrayIterator([2016 => 'Madrid']);

        $this->assertEquals([2016 => 'Brazil'], assoc($coll, 2016, 'Brazil'));
    }
}
