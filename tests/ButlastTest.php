<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\butlast;

final class ButlastTest extends TestCase
{
    /**
     * @test
     * @dataProvider getNonEmptyCollections
     */
    public function it_should_return_the_collection_without_the_last_element_preserving_the_keys($coll, $expected): void
    {
        $this->assertSame($expected, butlast($coll));
    }

    /**
     * @test
     * @dataProvider getEmptyCollections
     */
    public function it_should_return_an_empty_collection_with_empty_collections($coll): void
    {
        $this->assertSame([], butlast($coll));
    }

    /**
     * @test
     * @dataProvider getOneElementCollections
     */
    public function it_should_return_an_empty_collection_with_one_element_collections($coll): void
    {
        $this->assertSame([], butlast($coll));
    }

    public function getNonEmptyCollections(): array
    {
        return [
            'array'     => ['coll' => [1, 2, 3], 'expected' => [1, 2]],
            'iterator'  => ['coll' => new ArrayIterator([1, 2, 3]), 'expected' => [1, 2]],
            'generator' => ['coll' => $this->generator(1, 2, 3), 'expected' => [1, 2]],
        ];
    }

    public function getEmptyCollections(): array
    {
        return [
            'array'     => ['coll' => []],
            'iterator'  => ['coll' => new ArrayIterator([])],
            'generator' => ['coll' => $this->generator()],
        ];
    }

    public function getOneElementCollections(): array
    {
        return [
            'array'     => ['coll' => [1]],
            'iterator'  => ['coll' => new ArrayIterator([1])],
            'generator' => ['coll' => $this->generator(1)],
        ];
    }

    private function generator(...$items)
    {
        return apply(
            static function () use ($items) {
                foreach ($items as $item) {
                    yield $item;
                }
            }
        );
    }
}
