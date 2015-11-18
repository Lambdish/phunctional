<?php

namespace Akamon\Phunctional;

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
    return function (...$args) use ($fn) {
        return !$fn(...$args);
    };
}
