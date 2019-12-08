<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\apply;
use function Lambdish\Phunctional\do_if;

final class DoIfTest extends TestCase
{
    /** @test */
    public function it_should_call_the_fn_if_predicates_are_true(): void
    {
        $this->assertEquals(5, apply(do_if($this->sumOne(), [$this->isEven()]), [4]));
    }

    /** @test */
    public function it_should_return_null_if_all_predicates_are_not_true(): void
    {
        $this->assertNull(apply(do_if($this->sumOne(), [$this->isGreaterThanOne(), $this->isEven()]), [3]));
    }

    private function sumOne(): callable
    {
        return static function ($num) {
            return $num + 1;
        };
    }

    private function isEven(): callable
    {
        return static function ($num) {
            return $num % 2 === 0;
        };
    }

    private function isGreaterThanOne(): callable
    {
        return static function ($num) {
            return $num > 1;
        };
    }
}
