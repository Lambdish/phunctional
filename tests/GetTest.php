<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\get;

class GetTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame(2, get('two', $actual));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertNull(get('three', $actual));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame(3, get('three', $actual, 3));
    }
}
