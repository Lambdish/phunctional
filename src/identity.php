<?php

namespace Lambdish\Phunctional;

/**
 * It wraps a value into a Closure, which return the same value that is passed as argument whenever is called
 *
 * @since v1.0.7
 *
 * @param mixed $value any type of value
 *
 * @return \Closure
 */
function identity($value)
{
    return function () use ($value) {
        return $value;
    };
}
