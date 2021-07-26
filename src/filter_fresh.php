<?php

namespace Lambdish\Phunctional;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function, and
 * returning a new array with keys that start at 0.
 *
 * @template T
 * @template TKey of array-key
 *
 * @param callable(T,TKey):mixed $fn   function to filter by. response evaluated as truthy/falsy
 * @param iterable<TKey,T>       $coll collection of values to be filtered
 *
 * @return array<int,T>
 * @psalm-return list<T>
 *
 * @since 0.1
 */
function filter_fresh(callable $fn, iterable $coll): array
{
    return array_values(filter($fn, $coll));
}

const filter_fresh = '\Lambdish\Phunctional\filter_fresh';
