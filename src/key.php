<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

use Traversable;

/**
 * Returns the key of an item in a $coll or a $default value in the case it does not exists
 *
 * @param string|int $value   value to search in the collection
 * @param iterable   $coll    collection where search the desired key
 * @param mixed|null $default default value to be returned if the value is not found in the collection
 *
 * @return mixed|null
 */
function key($value, iterable $coll, $default = null)
{
    $args = $coll instanceof Traversable ? iterator_to_array($coll) : $coll;

    $key = array_search($value, $args, true);

    return false !== $key ? $key : $default;
}

const key = '\Lambdish\Phunctional\key';
