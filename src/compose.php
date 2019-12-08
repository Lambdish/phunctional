<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Takes a set of functions and returns another that is the composition of those `$fns`.
 * The result from the first function execution is used in the second function, etc.
 *
 * @param callable ...$fns functions to be composed
 *
 * @since 0.1
 */
function compose(callable ...$fns): callable
{
    return pipe(...reverse($fns));
}

const compose = '\Lambdish\Phunctional\compose';
