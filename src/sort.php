<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Sorts a collection
 *
 * @param callable $fn   comparator function which receives two elements of the collection and must return an
 *                       integer less than, equal to, or greater than zero if the first argument is considered
 *                       to be respectively less than, equal to, or greater than the second
 * @param iterable $coll collection to order
 */
function sort(callable $fn, iterable $coll): array
{
    $sorted = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    usort($sorted, $fn);

    return $sorted;
}

const sort = '\Lambdish\Phunctional\sort';
