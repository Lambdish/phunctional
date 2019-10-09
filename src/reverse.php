<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns a reversed $coll preserving its keys.
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 * because to reach the last one is necessary iterate among all the items
 *
 * @since 0.1
 *
 * @param array|Traversable $coll collection to be reversed
 *
 * @return mixed
 */
function reverse($coll)
{
    $array = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    return array_reverse($array, true);
}
