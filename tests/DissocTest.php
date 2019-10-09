<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\dissoc;

final class DissocTest extends TestCase
{
    /** @test */
    public function it_should_dissoc_a_value(): void
    {
        $coll = ['osiris' => 'The first one'];

        $this->assertEquals([], dissoc($coll, 'osiris'));
    }

    /** @test */
    public function it_should_dissoc_a_value_from_an_array_with_multiple_items(): void
    {
        $coll = ['osiris' => 'The first one', 'horus' => 'The son'];

        $this->assertEquals(['horus' => 'The son'], dissoc($coll, 'osiris'));
    }

    /** @test */
    public function it_should_dissoc_a_non_existing_key(): void
    {
        $coll = ['osiris' => 'The first one', 'horus' => 'The son'];

        $this->assertEquals($coll, dissoc($coll, 'clhorus'));
    }

    /** @test */
    public function it_should_dissoc_a_value_on_a_traversable(): void
    {
        $coll = new ArrayIterator(['osiris' => 'The first one', 'horus' => 'The son']);

        $this->assertEquals(['horus' => 'The son'], dissoc($coll, 'osiris'));
    }
}
