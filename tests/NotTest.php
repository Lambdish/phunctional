<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional\Tests;

use PHPUnit\Framework\TestCase;
use function Lambdish\Phunctional\not;

final class NotTest extends TestCase
{
    /** @test */
    public function is_should_return_the_function_opposite_value(): void
    {
        $isNotAnArray = not('is_array');

        $this->assertFalse($isNotAnArray(['this is' => 'an array']));
    }
}
