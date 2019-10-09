<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use stdClass;
use function Lambdish\Phunctional\identity;

final class IdentityTest extends TestCase
{
    /**
     * @test
     * @dataProvider values()
     */
    public function it_should_return_a_same_value_is_passed_as_argument($value): void
    {
        $this->assertSame($value, identity($value));
    }

    public function values(): array
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
