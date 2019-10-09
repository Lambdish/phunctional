<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\key;

final class KeyTest extends TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('two', key(2, $actual));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertNull(key(3, $actual));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists(): void
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('three', key(3, $actual, 'three'));
    }

    /** @test */
    public function it_should_return_empty_string_if_the_key_does_is_empty(): void
    {
        $actual = ['one' => 1, 'two' => 2, '' => 3];

        $this->assertSame('', key(3, $actual, 'default'));
    }

    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_boolean_key(): void
    {
        $actual = ['one' => 1, 'two' => false];

        $this->assertSame('two', key(false, $actual, 'default'));
    }

    /** @test */
    public function it_should_return_first_occurrence_of_the_item_of_an_existent_key(): void
    {
        $actual = [false => 1];

        $this->assertSame(0, key(1, $actual, 'default'));
    }
}
