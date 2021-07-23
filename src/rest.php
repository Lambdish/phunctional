<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns all the the elements of a collection except the first preserving the keys
 *
 * If the collection is empty or only have one item, returns an empty collection
 *
 * @template T
 * @template TKey of array-key
 *
 * @param iterable<TKey,T> $coll collection of values
 *
 * @return array<TKey,T>
 *
 * @since 0.1
 */
function rest(iterable $coll): array
{
    $firstItem = true;
    $rest      = [];

    foreach ($coll as $key => $value) {
        $firstItem
            ? $firstItem = false
            : $rest[$key] = $value;
    }

    return $rest;
}

const rest = '\Lambdish\Phunctional\rest';
