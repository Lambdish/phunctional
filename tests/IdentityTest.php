<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use stdClass;
use function Lambdish\Phunctional\identity;

final class IdentityTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider values()
     */
    public function it_should_return_a_same_value_is_passed_as_argument($value)
    {
        $this->assertSame($value, identity($value));
    }

    public function values()
    {
        return [
            [1],
            [9],
            [0],
            ['a'],
            ['b'],
            ['some text'],
            [new stdClass()],
            [[]],
            [['test', 'array']],
            [null],
        ];
    }
}
