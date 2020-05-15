<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V2;

use Otis22\FridayExercise\StringConcatenatedByForeach;
use Otis22\FridayExercise\V2\MergedArray;
use Otis22\FridayExercise\V2\SortedArray;
use PHPUnit\Framework\TestCase;

class MergedArrayTest extends TestCase
{
    public function testMergedArray(): void
    {
        $this->assertEquals(
            "123321",
            strval(
                new StringConcatenatedByForeach(
                    new MergedArray([1, 2, 3], [3, 2, 1])
                )
            )
        );
    }
    public function testSortedMergedArray(): void
    {
        $this->assertEquals(
            "112233",
            strval(
                new StringConcatenatedByForeach(
                    new SortedArray(
                        new MergedArray([1, 2, 3], [3, 2, 1])
                    )
                )
            )
        );
    }
}
