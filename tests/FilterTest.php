<?php

namespace Akamon\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Akamon\Phunctional\filter;

class FilterTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_filter_a_collection_keeping_the_indexes()
    {
        $actual = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
        $pred   = $this->evenFilterer();

        $this->assertSame(['two' => 2, 'four' => 4], filter($pred, $actual));
    }

    private function evenFilterer()
    {
        return function ($number) {
            return 0 === $number % 2;
        };
    }
}
