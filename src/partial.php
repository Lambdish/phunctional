<?php

namespace Akamon\Phunctional;

/**
 * Fix a number of arguments to a function producing another one with an smaller arity
 *
 * @since 0.1
 *
 * @param callable $fn      function to be biased
 * @param mixed    ...$args arguments to fix in the function
 *
 * @return callable
 */
function partial(callable $fn, ...$args)
{
    return function (...$biasedArgs) use ($fn, $args) {
        return $fn(...array_merge($args, $biasedArgs));
    };
}
