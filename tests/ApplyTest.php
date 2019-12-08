<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;

final class ApplyTest extends TestCase
{
    /** @test */
    public function it_should_call_return_the_value_of_the_called_function(): void
    {
        $this->assertSame('function without arguments', apply($this->functionWithoutArguments()));
    }

    /**
     * @test
     * @dataProvider arguments
     */
    public function it_should_call_properly_a_function_with_some_arguments($arguments): void
    {
        $this->assertSame('Hello functional, welcome to PHP!!', apply($this->functionWithArguments(), $arguments));
    }

    public function arguments(): array
    {
        return [
            'array'     => ['arguments' => ['PHP', 'functional']],
            'iterator'  => ['arguments' => new ArrayIterator(['PHP', 'functional'])],
            'generator' => ['arguments' => $this->generator('PHP', 'functional')],
        ];
    }

    private function functionWithoutArguments(): callable
    {
        return static function (): string {
            return 'function without arguments';
        };
    }

    private function functionWithArguments(): callable
    {
        return static function ($context, $name): string {
            return sprintf('Hello %s, welcome to %s!!', $name, $context);
        };
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
