<?php

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\dissoc;

final class DissocTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_dissoc_a_value()
    {
        $coll = ['osiris' => 'The first one'];

        $this->assertEquals([], dissoc($coll, 'osiris'));
    }

    /** @test */
    public function it_should_dissoc_a_value_from_an_array_with_multiple_items()
    {
        $coll = ['osiris' => 'The first one', 'horus' => 'The son'];

        $this->assertEquals(['horus' => 'The son'], dissoc($coll, 'osiris'));
    }

    /** @test */
    public function it_should_dissoc_a_non_existing_key()
    {
        $coll = ['osiris' => 'The first one', 'horus' => 'The son'];

        $this->assertEquals($coll, dissoc($coll, 'clhorus'));
    }

    /** @test */
    public function it_should_dissoc_a_value_on_a_traversable()
    {
        $coll = new ArrayIterator(['osiris' => 'The first one', 'horus' => 'The son']);

        $this->assertEquals(['horus' => 'The son'], dissoc($coll, 'osiris'));
    }
}
