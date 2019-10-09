<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * It wraps a value into a Closure, which return the same value whenever is called
 *
 * @since v1.0.7
 *
 * @param mixed $value any type of value
 *
 * @return \Closure
 */
function constant($value)
{
    return static function () use ($value) {
        return $value;
    };
}
