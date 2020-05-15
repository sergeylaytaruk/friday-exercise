<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V2;

use Otis22\FridayExercise\StringConcatenatedByForeach;
use PHPUnit\Framework\TestCase;

class StringConcatenatedByForeachTest extends TestCase
{
    public function testStringConcatenatedByForeach(): void
    {
        $this->assertEquals(
            "123",
            strval(
                new StringConcatenatedByForeach(
                    new \ArrayIterator([1, 2, 3])
                )
            )
        );
    }
}
