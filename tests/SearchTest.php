<?php

namespace Lambdish\Phunctional\Tests;

use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\search;

final class SearchTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function is_should_search_an_existent_value()
    {
        $amsterdam  = [
            'name'     => 'Amsterdam',
            'color'    => 'Black',
            'cool'     => true,
            'original' => false,
        ];
        $elephpant  = [
            'name'     => 'ElePHPant',
            'color'    => 'Blue',
            'cool'     => false,
            'original' => true,
        ];
        $laraphpant = [
            'name'     => 'LaraPHPant',
            'color'    => 'Red',
            'cool'     => true,
            'original' => false,
        ];

        $elephpants = [$amsterdam, $elephpant, $laraphpant];

        $this->assertEquals($elephpant, search($this->originalSearcher(), $elephpants));
    }

    /** @test */
    public function it_should_return_the_default_value_if_no_result_is_found()
    {
        $numbers = [1, 2, 3, 4, 5];

        $this->assertEquals('No result found', search($this->aNumberBiggerTanTen(), $numbers, 'No result found'));
    }

    private function originalSearcher()
    {
        return function (array $elephpant) {
            return $elephpant['original'];
        };
    }

    private function aNumberBiggerTanTen()
    {
        return function ($num) {
            return $num > 10;
        };
    }
}
