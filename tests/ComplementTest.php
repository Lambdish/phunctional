<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\complement;

class ComplementTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function is_should_return_the_function_opposite_value()
    {
        $isNotAnArray = complement('is_array');

        $this->assertFalse($isNotAnArray(['this is' => 'an array']));
    }
}
