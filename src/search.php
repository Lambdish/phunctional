<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Search a value in a collection. Return the first occurrence if found, null if not.
 *
 * @template T
 * @template TKey of array-key
 * @template D
 *
 * @param callable(T,TKey):bool $fn      searcher
 * @param iterable<TKey,T>      $coll    collection of values to be searched
 * @param D                     $default value to return if no result is found
 *
 * @return D|T
 *
 * @since 0.1
 */
function search(callable $fn, iterable $coll, $default = null)
{
    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            return $value;
        }
    }

    return $default;
}

const search = '\Lambdish\Phunctional\search';
