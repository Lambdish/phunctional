<?php

namespace Akamon\Phunctional;

/**
 * Returns the value of an item in a $coll or a $default value in the case it does not exists
 *
 * @since 0.1
 *
 * @param string|int $key     key to search in the collection
 * @param array      $coll    collection where search the desired value
 * @param mixed|null $default default value to be returned if the key is not found in the collection
 *
 * @return mixed|null
 */
function get($key, array $coll, $default = null)
{
    return array_key_exists($key, $coll) ? $coll[$key] : $default;
}
