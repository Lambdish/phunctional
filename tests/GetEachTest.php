<?php

declare(strict_types=1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\get_each;

final class GetEachTest extends TestCase {
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
    public function it_should_return_an_array_with_nulls_if_the_key_does_not_exists_and_not_default_value_is_provided(): void {
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

        $this->assertSame([null, null], get_each('not_existing_key', $actual));
    }

    /** @test */
    public function it_should_return_an_array_with_nulls_if_the_property_does_not_exists_and_not_default_value_is_provided(): void {
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

        $this->assertSame([null, null], get_each('not_existing_key', $traversable));
    }

    /** @test */
    public function it_should_return_an_array_with_the_default_value_provided_for_each_item_if_the_key_does_not_exists(): void {
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

        $this->assertSame([3, 3], get_each('not_existing_key', $actual, 3));
    }

    /** @test */
    public function it_should_return_an_array_with_the_default_value_provided_for_each_item_if_the_property_does_not_exists(): void {
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

        $this->assertSame([3, 3], get_each('not_existing_key', $traversable, 3));
    }

    /** @test */
    public function it_should_return_an_array_with_the_default_array_provided_for_each_item_if_the_key_does_not_exists(): void {
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

        $this->assertSame([[1, 2], [1, 2]], get_each('not_existing_key', $actual, [1, 2]));
    }

    /** @test */
    public function it_should_return_an_array_with_the_default_array_provided_for_each_item_if_the_property_does_not_exists(): void {
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

        $this->assertSame([[1, 2], [1, 2]], get_each('not_existing_key', $traversable, [1, 2]));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_false_or_null_value(): void {
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

        $this->assertSame([null, false], get_each('key', $actual, 1));
    }

    /** @test */
    public function it_should_return_an_array_with_values_of_each_item_of_an_existent_false_or_null_property_of_a_traversable(): void {
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

        $this->assertSame([null, false], get_each('key', $traversable, 1));
    }
}
