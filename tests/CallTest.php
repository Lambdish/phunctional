<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\call;

class CallTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_call_return_the_value_of_the_called_function()
    {
        $this->assertSame('function without arguments', call($this->functionWithoutArguments()));
    }

    /** @test */
    public function it_should_call_properly_a_function_with_some_arguments()
    {
        $this->assertSame(
            'Hello functional, welcome to PHP!!',
            call($this->functionWithArguments(), ['PHP', 'functional'])
        );
    }

    private function functionWithoutArguments()
    {
        return function () {
            return 'function without arguments';
        };
    }

    private function functionWithArguments()
    {
        return function ($context, $name) {
            return sprintf('Hello %s, welcome to %s!!', $name, $context);
        };
    }
}
