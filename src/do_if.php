<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a callable that will call the given function if the result of applying
 * the callable arguments to the predicates is true for all of them.
 *
 * @param callable   $fn         Function to call if all predicates are valid.
 * @param callable   ...$predicates Predicates to validate.
 */
function do_if(callable $fn, callable ...$predicates): ?callable
{
    return static function (...$args) use ($fn, $predicates) {
        $isValid = static function ($predicate) use ($args) {
            return $predicate(...$args);
        };

        return all($isValid, $predicates) ? $fn(...$args) : null;
    };
}
