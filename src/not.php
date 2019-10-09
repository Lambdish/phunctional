<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the opposite of the `$fn` call
 *
 * @since 0.1
 *
 * @param callable $fn
 *
 * @return callable
 */
function not(callable $fn)
{
    return static function (...$args) use ($fn) {
        return !$fn(...$args);
    };
}
