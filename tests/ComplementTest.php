<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\complement;

final class ComplementTest extends TestCase
{
    /**
     * @test
     * @dataProvider getNegatesValues()
     */
    public function it_should_returns_the_opposite($expected, callable $originalFn, $value): void
    {
        $complemented = complement($originalFn);

        $this->assertEquals($expected, $complemented($value));
    }

    public function getNegatesValues(): array
    {
        return [
            'is_not_null'                   => [
                'expected'    => false,
                'original_fn' => 'is_null',
                'value'       => null,
            ],
            'is_not_bigger_than_10_with_5'  => [
                'expected'    => true,
                'original_fn' => $this->isBiggerThanTen(),
                'value'       => 5,
            ],
            'is_not_bigger_than_10_with_10' => [
                'expected'    => false,
                'original_fn' => $this->isBiggerThanTen(),
                'value'       => 11,
            ],
        ];
    }

    private function isBiggerThanTen(): callable
    {
        return static function ($num) {
            return $num > 10;
        };
    }
}
