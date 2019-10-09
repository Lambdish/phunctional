<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

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
    return static function ($element) use ($className) {
        return $element instanceof $className;
    };
}
