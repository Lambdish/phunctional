<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\get;

final class GetTest extends TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame(2, get('two', $actual));
    }

    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_property_of_a_traversable(): void
    {
        $traversable = new ArrayIterator(['one' => 1, 'two' => 2]);

        $this->assertSame(2, get('two', $traversable));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertNull(get('three', $actual));
    }

    /** @test */
    public function it_should_return_null_if_the_property_does_not_exists_and_not_default_value_is_provided(): void
    {
        $traversable = new ArrayIterator(['one' => 1, 'two' => 2]);

        $this->assertNull(get('three', $traversable));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame(3, get('three', $actual, 3));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_property_does_not_exists(): void
    {
        $traversable = new ArrayIterator(['one' => 1, 'two' => 2]);

        $this->assertSame(3, get('three', $traversable, 3));
    }

    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_false_property_of_a_traversable(): void
    {
        $traversable = new ArrayIterator(['one' => null, 'two' => false]);

        $this->assertNull(get('one', $traversable, 'default'));
        $this->assertFalse(get('two', $traversable, true));
    }
}
