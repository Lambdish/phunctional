<?php

namespace Akamon\Phunctional;

use Traversable;

/**
 * Sorts a collection
 *
 * @param callable          $fn   comparator function which receives two elements of the collection and must return an
 *                                integer less than, equal to, or greater than zero if the first argument is considered
 *                                to be respectively less than, equal to, or greater than the second
 * @param array|Traversable $coll collection to order
 *
 * @return mixed|null
 */
function sort(callable $fn, $coll)
{
    $sorted = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    usort($sorted, $fn);

    return $sorted;
}
