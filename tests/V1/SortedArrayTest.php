<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V1;

use Otis22\FridayExercise\V1\SortedArray;
use PHPUnit\Framework\TestCase;

class SortedArrayTest extends TestCase
{

    public function testSorted(): void
    {
        $sortedArray = new SortedArray([3, 2, 1]);
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [1, 2, 3]);
    }
}
