<?php

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns the last element of a collection
 *
 * If the collection is empty returns null. If a generator is passed this will be iterated.
 *
 * @since 0.1
 *
 * @param array|Traversable $coll collection of values
 *
 * @return mixed|null
 */
function last($coll)
{
    return first(reverse($coll));
}
