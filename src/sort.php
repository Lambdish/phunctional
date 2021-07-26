<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Sorts a collection
 *
 * @template T
 *
 * @param callable(T,T):int     $fn   comparator function which receives two elements of the collection and must return
 *                                    an integer less than, equal to, or greater than zero if the first argument is
 *                                    considered to be respectively less than, equal to, or greater than the second
 * @param iterable<array-key,T> $coll collection to order
 *
 * @return array<int,T>
 * @psalm-return list<T>
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
