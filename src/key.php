<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the key of an item in a $coll or a $default value in the case it does not exists
 *
 * @template TKey of array-key
 * @template D
 *
 * @param array-key            $value   value to search in the collection
 * @param iterable<TKey,mixed> $coll    collection where search the desired key
 * @param D                    $default default value to be returned if the value is not found in the collection
 *
 * @return TKey|D
 *
 * @since 0.1
 */
function key($value, iterable $coll, $default = null)
{
    $key = array_search($value, to_array($coll), true);

    return false !== $key ? $key : $default;
}

const key = '\Lambdish\Phunctional\key';
