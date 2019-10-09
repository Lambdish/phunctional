<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\last;

final class LastTest extends TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_value_of_the_last_item_of_a_non_empty_collection($coll, $expected): void
    {
        $this->assertSame($expected, last($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_null_on_empty_collection($coll): void
    {
        $this->assertNull(last($coll));
    }

    public function getNonEmptyCollections(): array
    {
        return [
            'array'           => ['coll' => [1, 2], 'expected' => 2],
            'array_with_keys' => ['coll' => ['one' => 1, 'two' => 2], 'expected' => 2],
            'iterator'        => ['coll' => new ArrayIterator([1, 2]), 'expected' => 2],
            'generator'       => [
                'coll'     => apply(
                    static function () {
                        yield 1;
                        yield 2;
                    }
                ),
                'expected' => 2,
            ],
        ];
    }

    public function getEmptyCollections(): array
    {
        return [
            'array'    => ['coll' => []],
            'iterator' => ['coll' => new ArrayIterator()],
        ];
    }
}
