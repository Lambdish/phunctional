<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Check if some value of the collection satisfies the function
 * This is an alias for the `some` function
 *
 * @template T
 * @template TKey of array-key
 *
 * @param callable(T,TKey):mixed $fn   function to check if the predicate is true. response evaluated as truthy/falsy
 * @param iterable<TKey,T>       $coll collection of values to check some is true by the `$fn`
 *
 * @since 0.1
 */
function any(callable $fn, iterable $coll): bool
{
    return some($fn, $coll);
}

const any = '\Lambdish\Phunctional\any';
