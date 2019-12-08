<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a new collection with the keys reindexed by `$fn`.
 * Optionally `$fn` receive the key as the second argument.
 *
 * @param callable $fn   function to generate the key
 * @param iterable $coll collection to be reindexed
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
