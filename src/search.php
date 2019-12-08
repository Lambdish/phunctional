<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Search a value in a collection. Return the first occurrence if found, null if not.
 *
 * @param callable $fn      searcher
 * @param iterable $coll    collection of values to be searched
 * @param mixed    $default value to return if no result is found
 *
 * @return mixed|null
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
