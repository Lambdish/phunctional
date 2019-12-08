<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Transform a possible iterator to an array
 *
 * @param iterable $coll collection to transform to array
 *
 * @since 2
 */
function to_array(iterable $coll): array
{
    return $coll instanceof Traversable ? iterator_to_array($coll) : $coll;
}

const to_array = '\Lambdish\Phunctional\to_array';
