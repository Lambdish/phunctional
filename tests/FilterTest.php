<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

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

    private function evenByValueFilterer(): callable
    {
        return static function ($number) {
            return 0 === $number % 2;
        };
    }
}
