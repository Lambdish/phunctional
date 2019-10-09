<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\partial;

final class PartialTest extends TestCase
{
    /** @test */
    public function it_should_be_able_to_fix_arguments_to_a_function(): void
    {
        $add5 = partial($this->sum(), 5);

        $this->assertEquals(10, $add5(5));
        $this->assertEquals(50, $add5(10, 15, 20));
    }

    /** @test */
    public function it_should_return_a_lazy_function_if_no_arguments_are_present(): void
    {
        $sum = partial($this->sum());

        $this->assertEquals(7, $sum(2, 5));
    }

    private function sum(): callable
    {
        return static function (...$numbers) {
            return array_sum($numbers);
        };
    }
}
