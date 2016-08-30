<?php

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use Exception;
use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\instance_of;

class InstanceOfTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider getValidInstances
     */
    public function it_should_check_if_an_element_is_an_instance_of_a_class($className, $element)
    {
        $isInstanceOfClassName = instance_of($className);

        $this->assertTrue($isInstanceOfClassName($element));
    }

    /**
     * @test
     * @dataProvider getInvalidInstances
     */
    public function it_should_check_if_an_element_is_not_an_instance_of_a_class($className, $element)
    {
        $isInstanceOfClassName = instance_of($className);

        $this->assertFalse($isInstanceOfClassName($element));
    }

    public function getValidInstances()
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

    public function getInvalidInstances()
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
