<?php

namespace Akamon\Phunctional;

function all(callable $fn, $coll)
{
    foreach ($coll as $item) {
        if (!$fn($item)) {
            return false;
        }
    }

    return true;
}
