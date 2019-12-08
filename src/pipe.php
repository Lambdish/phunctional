<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Takes a set of functions and returns a new one that is the composition of those `$fns`.
 * The result from the first function execution is piped in to the second function and so on.
 *
 * @param callable ...$fns functions to be piped
 *
 * @since 0.1
 */
function pipe(callable ...$fns): callable
{
    $compose = static function ($composition, $fn) {
        return static function (...$args) use ($composition, $fn) {
            return null === $composition
                ? $fn(...$args)
                : $fn($composition(...$args));
        };
    };

    return reduce($compose, $fns);
}

const pipe = '\Lambdish\Phunctional\pipe';
