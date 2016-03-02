<?php

namespace Akamon\Phunctional;

/**
 * Returns a callable that will call the given function if the result of applying
 * the callable arguments to the predicates is true for all of them.
 *
 * @since 0.1
 *
 * @param callable   $fn         Function to call if all predicates are valid.
 * @param callable[] $predicates Predicates to validate.
 *
 * @return callable|null
 */
function do_if(callable $fn, array $predicates)
{
    return function (...$args) use ($fn, $predicates) {
        $isValid = function ($predicate) use ($args) {
            return $predicate(...$args);
        };

        return all($isValid, $predicates) ? $fn(...$args) : null;
    };
}
