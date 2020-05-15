<?php

namespace Otis22\PhpSkelleton\Tests;

use PHPUnit\Framework\TestCase;
use packagetest\JoinedString;

class TestJoinedString extends TestCase
{
    public function testJoinedString(): void
    {
        $this->assertEquals(
            "1|2|3",
            strval(
                new JoinedString(
                    "|",
                    new \ArrayIterator([1, 2, 3])
                )
            )
        );
    }
}
