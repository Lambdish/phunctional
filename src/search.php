<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Search a value in a collection. Return the first occurrence if found, null if not.
 *
 * @param callable          $fn      searcher
 * @param array|Traversable $coll    collection of values to be searched
 * @param mixed             $default value to return if no result is found
 *
 * @return mixed|null
 */
function search(callable $fn, $coll, $default = null)
{
    foreach ($coll as $key => $value) {
        if ($fn($value, $key)) {
            return $value;
        }
    }

    return $default;
}
