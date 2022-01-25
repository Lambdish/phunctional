<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the first element of a collection
 *
 * If the collection is empty returns null
 *
 * @template T
 *
 * @param iterable<T> $coll collection of values
 *
 * @return T|null
 *
 * @since 0.1
 */
function first(iterable $coll)
{
    foreach ($coll as $item) {
        return $item;
    }

    return null;
}

const first = '\Lambdish\Phunctional\first';
