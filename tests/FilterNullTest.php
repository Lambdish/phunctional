<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\filter_null;

final class FilterNullTest extends TestCase
{
    /**
     * @test
     * @dataProvider collections
     */
    public function it_should_filter_a_collection_discriminating_nulls($actual, $expected): void
    {
        $this->assertSame($expected, filter_null($actual));
    }

    public function collections(): array
    {
        return [
            'array'           => ['actual' => [1, 2, null], 'expected' => [1, 2]],
            'array_with_keys' => [
                'actual'   => ['one' => 1, 'two' => 2, 'three' => null, 'four' => false],
                'expected' => ['one' => 1, 'two' => 2, 'four' => false],
            ],
            'iterator'        => [
                'actual'   => new ArrayIterator(['one' => 1, 'two' => 2, 'three' => null]),
                'expected' => ['one' => 1, 'two' => 2],
            ],
        ];
    }
}
