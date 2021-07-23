<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a new collection with the keys reindexed by `$fn`.
 * Optionally `$fn` receive the key as the second argument.
 *
 * @template T
 * @template TKey of array-key
 * @template RKey of array-key
 *
 * @param callable(T,TKey):RKey $fn   function to generate the key
 * @param iterable<TKey,T>      $coll collection to be reindexed
 *
 * @return array<RKey,T>
 *
 * @since 0.1
 */
function reindex(callable $fn, iterable $coll): array
{
    $result = [];

    foreach ($coll as $key => $value) {
        $result[$fn($value, $key)] = $value;
    }

    return $result;
}

const reindex = '\Lambdish\Phunctional\reindex';
