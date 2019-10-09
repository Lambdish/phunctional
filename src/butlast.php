<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns all the elements of a collection except the last preserving the keys
 *
 * If the collection is empty or only have one item, returns an empty collection
 *
 * @since 0.1
 *
 * @param array|Traversable $coll collection of values
 *
 * @return array
 */
function butlast($coll)
{
    return reverse(rest(reverse($coll)));
}
