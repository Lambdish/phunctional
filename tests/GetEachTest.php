<?php

declare(strict_types=1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\get_each;

final class GetEachTest extends TestCase {
    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_key_indexed_by_integers(): void {
        $actual = [
            [
                'key'       => 1,
                'other_key' => 3
            ],
            [
                'key'       => 2,
                'other_key' => 4
            ]
        ];

        $this->assertSame([1, 2], get_each('key', $actual));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_key(): void {
        $actual = [
            'one' => [
                'key'       => 1,
                'other_key' => 3
            ],
            'two' => [
                'key'       => 2,
                'other_key' => 4
            ]
        ];

        $this->assertSame([1, 2], get_each('key', $actual));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_property_of_a_traversable(): void {
        $traversable = new ArrayIterator([
            'one' => [
                'key'       => 1,
                'other_key' => 3
            ],
            'two' => [
                'key'       => 2,
                'other_key' => 4
            ]
        ]);

        $this->assertSame([1, 2], get_each('key', $traversable));
    }

    /** @test */
    public function it_should_return_an_empty_array_if_the_key_does_not_exist(): void {
        $actual = [
            'one' => [
                'key'       => 1,
                'other_key' => 3
            ],
            'two' => [
                'key'       => 2,
                'other_key' => 4
            ]
        ];

        $this->assertSame([], get_each('not_existing_key', $actual));
    }

    /** @test */
    public function it_should_return_an_empty_array_if_the_property_does_not_exist(): void {
        $traversable = new ArrayIterator([
            'one' => [
                'key'       => 1,
                'other_key' => 3
            ],
            'two' => [
                'key'       => 2,
                'other_key' => 4
            ]
        ]);

        $this->assertSame([], get_each('not_existing_key', $traversable));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_false_value(): void {
        $actual = [
            'one' => [
                'key'       => null,
                'other_key' => true
            ],
            'two' => [
                'key'       => false,
                'other_key' => true
            ]
        ];

        $this->assertSame([false], get_each('key', $actual));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_false_property_of_a_traversable(): void {
        $traversable = new ArrayIterator([
            'one' => [
                'key'       => null,
                'other_key' => true
            ],
            'two' => [
                'key'       => false,
                'other_key' => true
            ]
        ]);

        $this->assertSame([false], get_each('key', $traversable));
    }
}
