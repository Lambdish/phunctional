<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Returns a new collection with the keys reindexed by `$fn`.
 * Optionally `$fn` receive the key as the second argument.
 *
 * @param callable          $fn   function to generate the key
 * @param array|Traversable $coll collection to be reindexed
 *
 * @return array
 */
function reindex(callable $fn, $coll)
{
    $result = [];

    foreach ($coll as $key => $value) {
        $result[$fn($value, $key)] = $value;
    }

    return $result;
}
