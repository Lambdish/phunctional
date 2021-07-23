<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * It wraps a value into a Closure, which return the same value whenever is called
 *
 * @template T
 *
 * @param T $value any type of value
 *
 * @return callable():T
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
