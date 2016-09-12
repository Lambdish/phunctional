<?php

namespace Lambdish\Phunctional;

/**
 * Returns an array with the values of `$fn` executed a certain amount of `$times`
 *
 * @since 0.1
 *
 * @param callable $fn    function to be executed
 * @param int      $times times to call the function
 *
 * @return array
 */
function repeat(callable $fn, $times = INF)
{
    $result = [];

    for ($i = 0; $i < $times; ++$i) {
        $result[] = $fn();
    }

    return $result;
}
