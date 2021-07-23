<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the last element of a collection
 *
 * If the collection is empty returns null. If a generator is passed this will be iterated.
 *
 * @template T
 *
 * @param iterable<array-key,T> $coll collection of values
 *
 * @return T|null
 *
 * @since 0.1
 */
function last(iterable $coll)
{
    return first(reverse($coll));
}

const last = '\Lambdish\Phunctional\last';
