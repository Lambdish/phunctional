<?php

namespace Lambdish\Phunctional\Tests;

use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\do_if;
use PHPUnit_Framework_TestCase;

final class DoIfTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_call_the_fn_if_predicates_are_true()
    {
        $this->assertEquals(5, apply(do_if($this->sumOne(), [$this->isEven()]), [4]));
    }

    /** @test */
    public function it_should_return_null_if_all_predicates_are_not_true()
    {
        $this->assertNull(apply(do_if($this->sumOne(), [$this->isGreaterThanOne(), $this->isEven()]), [3]));
    }

    private function sumOne()
    {
        return function ($num) {
            return $num + 1;
        };
    }

    private function isEven()
    {
        return function ($num) {
            return $num % 2 === 0;
        };
    }

    private function isGreaterThanOne()
    {
        return function ($num) {
            return $num > 1;
        };
    }
}
