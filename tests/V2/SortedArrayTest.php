<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V2;

use Otis22\FridayExercise\StringConcatenatedByForeach;
use Otis22\FridayExercise\V2\SortedArray;
use PHPUnit\Framework\TestCase;

class SortedArrayTest extends TestCase
{
    public function testSortedArray(): void
    {
        $this->assertEquals(
            "123",
            strval(
                new StringConcatenatedByForeach(
                    new SortedArray([3, 2, 1])
                )
            )
        );
    }
}
