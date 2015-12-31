<?php

namespace Akamon\Phunctional;

/**
 * Returns the value in a nested associative structure or a $default value in the case it does not exists
 *
 * @since 0.1
 *
 * @param array      $keys     Keys of the value to be returned
 * @param array      $elements Elements to search in
 * @param mixed|null $default  Value to be returned if the key does not exists
 *
 * @return mixed|null
 */

function get_in(array $keys, array $elements, $default = null)
{
    $current = $elements;

    foreach ($keys as $key) {
        if (!array_key_exists($key, $current)) {
            return $default;
        }

        $current = $current[$key];
    }

    return $current;
}
