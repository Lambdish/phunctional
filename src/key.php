<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns the key of an item in a $coll or a $default value in the case it does not exists
 *
 * @param string|int        $value   value to search in the collection
 * @param array             $coll    collection where search the desired key
 * @param mixed|null        $default default value to be returned if the value is not found in the collection
 *
 * @return mixed|null
 */
function key($value, $coll, $default = null)
{
    $key = array_search($value, $coll, true);

    return false !== $key ? $key : $default;
}

const key = '\Lambdish\Phunctional\key';
