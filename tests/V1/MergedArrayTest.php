<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V1;

use Otis22\FridayExercise\V1\MergedArray;
use Otis22\FridayExercise\V1\SortedArray;
use PHPUnit\Framework\TestCase;

class MergedArrayTest extends TestCase
{

    public function testMerged(): void
    {
        $mergedArray = new MergedArray([3, 2, 1], [1, 2, 3]);
        $result = iterator_to_array($mergedArray);
        $this->assertEquals($result, [3, 2, 1, 1, 2, 3]);
    }

    public function testSortedMerged(): void
    {
        $sortedArray = new SortedArray(iterator_to_array(new MergedArray([3, 2, 1], [1, 2, 3])));
        $result = iterator_to_array($sortedArray);
        $this->assertEquals($result, [1, 1, 2, 2, 3, 3]);
    }
}
