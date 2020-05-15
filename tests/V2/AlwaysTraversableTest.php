<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\Tests\V2;

use Otis22\FridayExercise\V2\AlwaysTraversable;
use PHPUnit\Framework\TestCase;

class AlwaysTraversableTest extends TestCase
{
    public function testReturnIteratorForIterator(): void
    {
        $this->assertTrue(
            (
                new AlwaysTraversable(
                    new \ArrayIterator([1, 2, 3])
                )
            )->getIterator() instanceof \Iterator
        );
    }

    public function testReturnIteratorForArray(): void
    {
        $this->assertTrue(
            (
            new AlwaysTraversable([1, 2, 3])
            )->getIterator() instanceof \Iterator
        );
    }
}
