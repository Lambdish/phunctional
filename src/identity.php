<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Identity function is a function which return the same value that is passed as argument. `f(x) = x`
 *
 * @template T
 *
 * @param T $argument any type of value
 *
 * @return T
 *
 * @since 1.0.9
 */
function identity($argument)
{
    return $argument;
}

const identity = '\Lambdish\Phunctional\identity';
