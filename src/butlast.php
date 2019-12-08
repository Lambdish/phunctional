<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns all the elements of a collection except the last preserving the keys
 *
 * If the collection is empty or only have one item, returns an empty collection
 *
 * @param iterable $coll collection of values
 *
 * @since 0.1
 */
function butlast(iterable $coll): array
{
    return reverse(rest(reverse($coll)));
}

const butlast = '\Lambdish\Phunctional\butlast';
