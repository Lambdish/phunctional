<?php

namespace Akamon\Phunctional;

function all(callable $fn, $coll)
{
    return !some(not($fn), $coll);
}
