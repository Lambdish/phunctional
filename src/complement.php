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
function complement(callable $fn)
{
    return function (...$args) use ($fn) {
        return !call_user_func_array($fn, $args);
    };
}
