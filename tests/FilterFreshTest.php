<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\filter_fresh;

class FilterFreshTest extends TestCase
{
    /** @test */
    public function it_should_filter_a_collection_updating_the_indexes(): void
    {
        $actual = [0 => 'green', 1 => 'red', 2 => 'yellow', 3 => 'orange', 4 => 'blue'];
        $pred   = $this->primaryColorFilterer();

        $this->assertSame([0 => 'red', 1 => 'yellow', 2 => 'blue'], filter_fresh($pred, $actual));
    }

    /** @test */
    public function it_should_filter_a_collection_updating_their_keys(): void
    {
        $actual = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5];
        $pred   = $this->evenByValueFilterer();

        $this->assertSame([0 => 2, 1 => 4], filter_fresh($pred, $actual));
    }

    private function primaryColorFilterer(): callable
    {
        return static function ($color) {
            return in_array($color, ['red', 'yellow', 'blue']);
        };
    }

    private function evenByValueFilterer(): callable
    {
        return static function ($number) {
            return 0 === $number % 2;
        };
    }
}
