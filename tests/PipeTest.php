<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;

final class PipeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider calculatorProvider
     */
    public function is_should_compose_a_functions_combination($a, $b, $result)
    {
        $calculator = pipe($this->multiplier(), $this->byTwoDivider());

        $this->assertSame($result, apply($calculator, [$a, $b]));
    }

    public function calculatorProvider()
    {
        return [
            ['a' => 5, 'b' => 10, 'result' => 25],
            ['a' => 1, 'b' => 10, 'result' => 5],
            ['a' => 3, 'b' => 20, 'result' => 30],
        ];
    }

    private function multiplier()
    {
        return function ($a, $b) {
            return $a * $b;
        };
    }

    private function byTwoDivider()
    {
        return function ($num) {
            return $num / 2;
        };
    }
}
