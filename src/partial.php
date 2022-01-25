<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Fix a number of arguments to a function producing another one with an smaller arity
 *
 * @template R
 *
 * @param callable(mixed...):R $fn      function to be biased
 * @param mixed                ...$args arguments to fix in the function
 *
 * @return callable(mixed...):R
 *
 * @since 0.1
 */
function partial(callable $fn, ...$args): callable
{
    return static function (...$biasedArgs) use ($fn, $args) {
        return $fn(...array_merge($args, $biasedArgs));
    };
}

const partial = '\Lambdish\Phunctional\partial';
