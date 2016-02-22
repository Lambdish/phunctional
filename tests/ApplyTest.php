<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\apply;

class ApplyTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_call_return_the_value_of_the_called_function()
    {
        $this->assertSame('function without arguments', apply($this->functionWithoutArguments()));
    }

    /** @test */
    public function it_should_call_properly_a_function_with_some_arguments()
    {
        $this->assertSame(
            'Hello functional, welcome to PHP!!',
            apply($this->functionWithArguments(), 'PHP', 'functional')
        );
    }

    /** @test */
    public function it_should_call_properly_a_function_with_some_array_arguments()
    {
        $this->assertSame(
            'Hello functional, welcome to PHP!!',
            apply($this->functionWithArguments(), ['PHP', 'functional'])
        );
    }

    /** @test */
    public function it_should_call_properly_a_function_with_an_array_as_last_parameter()
    {
        $this->assertSame(
            'Hello Sir. Rich Hickey, welcome to PHP!!',
            apply($this->functionWithLastArgumentArray(), 'PHP', 'Sir.', ['Rich', 'Hickey'])
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

    private function functionWithLastArgumentArray()
    {
        return function ($context, $treatment, $name, $surname) {
            return sprintf('Hello %s %s %s, welcome to %s!!', $treatment, $name, $surname, $context);
        };
    }
}
