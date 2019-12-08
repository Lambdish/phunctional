<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * It wraps a value into a Closure, which return the same value whenever is called
 *
 * @param mixed $value any type of value
 *
 * @since 1.0.7
 */
function constant($value): callable
{
    return static function () use ($value) {
        return $value;
    };
}

const constant = '\Lambdish\Phunctional\constant';
