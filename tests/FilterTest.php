<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\filter;

class FilterTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_filter_a_collection_keeping_the_indexes()
    {
        $actual = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
        $pred   = $this->evenByValueFilterer();

        $this->assertSame(['two' => 2, 'four' => 4], filter($pred, $actual));
    }

    /** @test */
    public function it_should_filter_a_collection_using_their_keys()
    {
        $actual = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five'];
        $pred   = $this->evenByKeyFilterer();

        $this->assertSame([2 => 'two', 4 => 'four'], filter($pred, $actual));
    }

    private function evenByValueFilterer()
    {
        return function ($number) {
            return 0 === $number % 2;
        };
    }

    private function evenByKeyFilterer()
    {
        return function ($textNumber, $number) {
            return 0 === $number % 2;
        };
    }
}
