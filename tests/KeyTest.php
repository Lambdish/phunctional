<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\key;

class KeyTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('two', key(2, $actual));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertNull(key(3, $actual));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('three', key(3, $actual, 'three'));
    }

    /** @test */
    public function it_should_return_empty_string_if_the_key_does_is_empty()
    {
        $actual = ['one' => 1, 'two' => 2, '' => 3];

        $this->assertSame('', key(3, $actual, 'default'));
    }

    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_boolean_key()
    {
        $actual = ['one' => 1, 'two' => false];

        $this->assertSame('two', key(false, $actual, 'default'));
    }

    /** @test */
    public function it_should_return_first_occurrence_of_the_item_of_an_existent_key()
    {
        $actual = [false => 1];

        $this->assertSame(0, key(1, $actual, 'default'));
    }
}
