<?php

declare(strict_types=1);

namespace Otis22\PhpSkelleton\Tests;

use packagetest\Sortarray;
use PHPUnit\Framework\TestCase;

class TestSortarray extends TestCase
{

    private $arrayTest = [];

    public function setUp(): void
    {
        $this->arrayTest = [2,4,1,3];
    }

    public function testSorteArray(): void
    {
        $sortedArray = new Sortarray($this->arrayTest);
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [1, 2, 3, 4]);
    }

    public function testCountArray(): void
    {
        $this->assertEquals(
            (new Sortarray($this->arrayTest))->count(),
            4
        );
    }
}
