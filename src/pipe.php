<?php

namespace Akamon\Phunctional;

/**
 * Takes a set of functions and returns a new one that is the composition of those `$fns`.
 * The result from the first function execution is piped in to the second function and so on.
 *
 * @since 0.1
 *
 * @param callable[] $fns functions to be piped
 *
 * @return mixed
 */
function pipe(...$fns)
{
    $compose = function ($composition, $fn) {
        return function (...$args) use ($composition, $fn) {
            return null === $composition ?
                $fn(...$args) :
                $fn($composition(...$args));
        };
    };

    return reduce($compose, $fns);
}
