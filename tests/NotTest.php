<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\not;

class NotTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function is_should_return_the_function_opposite_value()
    {
        $isNotAnArray = not('is_array');

        $this->assertFalse($isNotAnArray(['this is' => 'an array']));
    }
}
