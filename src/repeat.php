<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns an array with the values of `$fn` executed a certain amount of `$times`
 *
 * @template T
 *
 * @param callable():T $fn    function to be executed
 * @param int          $times times to call the function
 *
 * @return array<int,T>
 * @psalm-return list<T>
 *
 * @since 0.1
 */
function repeat(callable $fn, int $times): array
{
    $result = [];

    for ($i = 0; $i < $times; ++$i) {
        $result[] = $fn();
    }

    return $result;
}

const repeat = '\Lambdish\Phunctional\repeat';
