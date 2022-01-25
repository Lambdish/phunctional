<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use ArgumentCountError;

/**
 * Returns an array containing the results of applying $fn to the items of the $coll
 *
 * Similar to `array_map` but accepting Traversable.
 * Function $fn should accept the value of the item as the first argument and optionally the key of the
 * item as the second argument.
 *
 * @template T
 * @template TKey of array-key
 * @template R
 *
 * @param callable(T,TKey):R $fn   function to apply to every item in the collection
 * @param iterable<TKey,T>   $coll collection of values to apply the function
 *
 * @return array<TKey,R>
 *
 * @since 0.1
 */
function map(callable $fn, iterable $coll): array
{
    try {
        return ___map_indexed($fn, $coll);
    } catch (ArgumentCountError $error) {
        return array_map($fn, to_array($coll));
    }
}

const map = '\Lambdish\Phunctional\map';

/**
 * @template T
 * @template TKey of array-key
 * @template R
 *
 * @param callable(T,TKey):R $fn
 * @param iterable<TKey,T>   $coll
 *
 * @return array<TKey,R>
 */
function ___map_indexed(callable $fn, iterable $coll): array
{
    $result = [];

    foreach ($coll as $key => $value) {
        $result[$key] = $fn($value, $key);
    }

    return $result;
}
