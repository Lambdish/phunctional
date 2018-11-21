<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\filter_fresh;

class FilterFreshTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_filter_a_collection_updating_the_indexes()
    {
        $actual = [0 => "green", 1 => "red", 2 => "yellow", 3 => "orange", 4 => "blue"];
        $pred   = $this->primaryColorFilterer();

        $this->assertSame([0 => "red", 1 => "yellow", 2 => "blue"], filter_fresh($pred, $actual));
    }

    /** @test */
    public function it_should_filter_a_collection_updating_their_keys()
    {
        $actual = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
        $pred   = $this->evenByValueFilterer();

        $this->assertSame([0 => 2, 1 => 4], filter_fresh($pred, $actual));
    }

    private function primaryColorFilterer()
    {
      return function ($color) {
        return $color === "red"
            || $color === "yellow"
            || $color === "blue";
      };
    }

    private function evenByValueFilterer()
    {
        return function ($number) {
            return 0 === $number % 2;
        };
    }
}
