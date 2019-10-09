<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use Exception;
use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\instance_of;

final class InstanceOfTest extends TestCase
{
    /**
     * @test
     * @dataProvider getValidInstances
     */
    public function it_should_check_if_an_element_is_an_instance_of_a_class($className, $element): void
    {
        $isInstanceOfClassName = instance_of($className);

        $this->assertTrue($isInstanceOfClassName($element));
    }

    /**
     * @test
     * @dataProvider getInvalidInstances
     */
    public function it_should_check_if_an_element_is_not_an_instance_of_a_class($className, $element): void
    {
        $isInstanceOfClassName = instance_of($className);

        $this->assertFalse($isInstanceOfClassName($element));
    }

    public function getValidInstances(): array
    {
        return [
            'exception'      => [
                'className' => Exception::class,
                'element'   => new Exception(),
            ],
            'array_iterator' => [
                'className' => ArrayIterator::class,
                'element'   => new ArrayIterator(),
            ],
        ];
    }

    public function getInvalidInstances(): array
    {
        return [
            'exception'      => [
                'className' => Exception::class,
                'element'   => new ArrayIterator(),
            ],
            'array_iterator' => [
                'className' => ArrayIterator::class,
                'element'   => new Exception(),
            ],
        ];
    }
}
