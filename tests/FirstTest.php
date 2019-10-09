<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\first;

final class FirstTest extends TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_value_of_the_first_item_of_a_non_empty_collection($coll): void
    {
        $this->assertSame(1, first($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_null_on_empty_collection($coll): void
    {
        $this->assertNull(first($coll));
    }

    public function getNonEmptyCollections(): array
    {
        return [
            'array'           => ['coll' => [1, 2]],
            'array_with_keys' => ['coll' => ['one' => 1, 'two' => 2]],
            'iterator'        => ['coll' => new ArrayIterator([1, 2])],
            'generator'       => [
                'coll' => apply(
                    static function () {
                        yield 1;
                        yield 2;
                    }
                ),
            ],
        ];
    }

    /** @todo add a data set for an empty generator */
    public function getEmptyCollections(): array
    {
        return [
            'array'    => ['coll' => []],
            'iterator' => ['coll' => new ArrayIterator()],
        ];
    }
}
