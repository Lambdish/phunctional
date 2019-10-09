<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\pipe;

final class PipeTest extends TestCase
{
    /**
     * @test
     * @dataProvider calculatorProvider
     */
    public function is_should_compose_a_functions_combination($a, $b, $result): void
    {
        $calculator = pipe($this->multiplier(), $this->byTwoDivider());

        $this->assertSame($result, apply($calculator, [$a, $b]));
    }

    public function calculatorProvider(): array
    {
        return [
            ['a' => 5, 'b' => 10, 'result' => 25],
            ['a' => 1, 'b' => 10, 'result' => 5],
            ['a' => 3, 'b' => 20, 'result' => 30],
        ];
    }

    private function multiplier(): callable
    {
        return static function ($a, $b) {
            return $a * $b;
        };
    }

    private function byTwoDivider(): callable
    {
        return static function ($num) {
            return $num / 2;
        };
    }
}
