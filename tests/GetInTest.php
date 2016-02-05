<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\get_in;

class GetInTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key()
    {
        $user = [
            'username' => 'Peter',
            'profile'  => ['name' => 'Peter', 'surname' => 'Quinn', 'email' => 'peterquinn@fakeemail.com']
        ];

        $this->assertSame('peterquinn@fakeemail.com', get_in(['profile', 'email'], $user));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided()
    {
        $user = [
            'username' => 'Peter',
            'profile'  => ['name' => 'Peter', 'surname' => 'Quinn', 'email' => 'peterquinn@fakeemail.com']
        ];

        $this->assertNull(get_in(['password'], $user));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists()
    {
        $user = [
            'username' => 'Peter',
            'profile'  => ['name' => 'Peter', 'surname' => 'Quinn', 'email' => 'peterquinn@fakeemail.com']
        ];

        $this->assertSame('fakepass', get_in(['password'], $user, 'fakepass'));
    }
}
