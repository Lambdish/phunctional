<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Sorts a collection
 *
 * @param callable $fn   comparator function which receives two elements of the collection and must return an
 *                       integer less than, equal to, or greater than zero if the first argument is considered
 *                       to be respectively less than, equal to, or greater than the second
 * @param iterable $coll collection to order
 *
 * @since 0.1
 */
function sort(callable $fn, iterable $coll): array
{
    $sorted = to_array($coll);

    usort($sorted, $fn);

    return $sorted;
}

const sort = '\Lambdish\Phunctional\sort';
