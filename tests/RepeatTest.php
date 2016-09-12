<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\repeat;

class RepeatTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_repeat_a_function_certain_amount_of_times()
    {
        $fn    = $this->integerGenerator();
        $times = 5;

        $collectionOfIntegers = repeat($fn, $times);

        $this->assertInternalType('array', $collectionOfIntegers);
        $this->assertContainsOnly('int', $collectionOfIntegers);
        $this->assertCount($times, $collectionOfIntegers);
    }

    private function integerGenerator()
    {
        return function () {
            return rand();
        };
    }
}
