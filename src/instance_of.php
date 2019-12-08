<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a checker that validated if an `$element` is an instance of a `$className`
 *
 * @param string $className class name to compare with
 *
 * @since 0.1
 */
function instance_of($className): callable
{
    return static function ($element) use ($className) {
        return $element instanceof $className;
    };
}

const instance_of = '\Lambdish\Phunctional\instance_of';
