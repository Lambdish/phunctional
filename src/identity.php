<?php

namespace Lambdish\Phunctional;

/**
 * Is a function that always returns the same value that was used as its argument
 *
 * @since v1.0.7
 *
 * @param mixed $argument any type of value
 *
 * @return mixed
 */
function identity($argument)
{
    return $argument;
}
