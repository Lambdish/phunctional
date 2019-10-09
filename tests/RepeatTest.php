<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\repeat;

final class RepeatTest extends TestCase
{
    /** @test */
    public function it_should_repeat_a_function_certain_amount_of_times(): void
    {
        $fn    = $this->integerGenerator();
        $times = 5;

        $collectionOfIntegers = repeat($fn, $times);

        $this->assertIsArray($collectionOfIntegers);
        $this->assertContainsOnly('int', $collectionOfIntegers);
        $this->assertCount($times, $collectionOfIntegers);
    }

    private function integerGenerator(): callable
    {
        return static function () {
            return mt_rand();
        };
    }
}
