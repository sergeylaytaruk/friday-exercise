<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests;

use Otis22\FridayExercise\Test;
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{

    public function testOne(): void
    {
        $this->assertEquals(
            (new Test())->one(),
            1
        );
    }
    public function testTwo(): void
    {
        $this->assertEquals(
            (new Test())->two(),
            2
        );
    }
}
