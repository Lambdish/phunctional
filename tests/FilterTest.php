<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\filter;

final class FilterTest extends TestCase
{
    /** @test */
    public function it_should_filter_a_collection_keeping_the_indexes(): void
    {
        $actual = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
        $pred   = $this->evenByValueFilterer();

        $this->assertSame(['two' => 2, 'four' => 4], filter($pred, $actual));
    }

    /** @test */
    public function it_should_filter_a_collection_keeping_the_indexes_using_an_iterator(): void
    {
        $actual = new ArrayIterator(['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5]);
        $pred   = $this->evenByValueFilterer();

        $this->assertSame(['two' => 2, 'four' => 4], filter($pred, $actual));
    }

    /** @test */
    public function it_should_filter_a_collection_using_their_keys(): void
    {
        $actual = [1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five'];
        $pred   = $this->evenByKeyFilterer();

        $this->assertSame([2 => 'two', 4 => 'four'], filter($pred, $actual));
    }

    private function evenByValueFilterer(): callable
    {
        return static function ($number) {
            return 0 === $number % 2;
        };
    }

    private function evenByKeyFilterer(): callable
    {
        return static function ($textNumber, $number) {
            return 0 === $number % 2;
        };
    }
}
