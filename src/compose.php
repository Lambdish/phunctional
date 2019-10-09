<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Takes a set of functions and returns another that is the composition of those `$fns`.
 * The result from the first function execution is used in the second function, etc.
 *
 * @param callable[] $fns functions to be composed
 *
 * @return mixed
 */
function compose(...$fns)
{
    return pipe(...reverse($fns));
}
