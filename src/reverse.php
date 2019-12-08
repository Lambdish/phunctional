<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a reversed $coll preserving its keys.
 *
 * Passing a Generator to this function will work but it does not provide any improvement against a simple Traversable
 * because to reach the last one is necessary iterate among all the items
 *
 * @param iterable $coll collection to be reversed
 *
 * @since 0.1
 */
function reverse(iterable $coll): array
{
    return array_reverse(to_array($coll), true);
}

const reverse = '\Lambdish\Phunctional\reverse';
