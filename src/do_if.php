<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a callable that will call the given function if the result of applying
 * the callable arguments to the predicates is true for all of them.
 *
 * @template T
 * @template R
 *
 * @param callable(T...):R            $fn         Function to call if all predicates are valid.
 * @param array<callable(T...):mixed> $predicates Predicates to validate.
 *
 * @return callable(T...):R|callable(T...):null
 *
 * @since 0.1
 */
function do_if(callable $fn, iterable $predicates): callable
{
    return static function (...$args) use ($fn, $predicates) {
        $isValid = static function ($predicate) use ($args) {
            return $predicate(...$args);
        };

        return all($isValid, $predicates) ? $fn(...$args) : null;
    };
}

const do_if = '\Lambdish\Phunctional\do_if';
