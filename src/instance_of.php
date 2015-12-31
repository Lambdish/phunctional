<?php

namespace Akamon\Phunctional;

use Closure;

/**
 * Returns a checker that validated if an `$element` is an instance of a `$className`
 *
 * @param string $className class name to compare with
 *
 * @return Closure
 */
function instance_of($className)
{
    return function ($element) use ($className) {
        return $element instanceof $className;
    };
}
