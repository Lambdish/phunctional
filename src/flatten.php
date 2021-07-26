<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Returns a flat array of a multidimensional $coll
 *
 *
 * @template T1 of int|float|bool|string|callable|object|null
 * @template T2 of int|float|bool|string|callable|object|null
 * @template T3 of int|float|bool|string|callable|object|null
 *
 * @param iterable<T1|iterable<T2|iterable<T3|mixed>>> $coll detects types in the first 3 depth levels
 *
 * @return array<int,T1|T2|T3>
 * @psalm-return list<T1|T2|T3>
 *
 * @since 0.1
 */
function flatten(iterable $coll): array
{
    $result = [];

    foreach ($coll as $value) {
        if (is_iterable($value)) {
            foreach (flatten($value) as $v) {
                $result[] = $v;
            }
        } else {
            $result[] = $value;
        }
    }

    return $result;
}

const flatten = '\Lambdish\Phunctional\flatten';
