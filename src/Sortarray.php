<?php

declare(strict_types=1);

namespace packagetest;

/**
 * @template T
 *
 * @implements \Iterator<int, int>
 */
class Sortarray implements \Iterator, \Countable
{
    /**
     * @var int
     */
    private $position;

    /**
     * @var array<int, int>
     */
    private $array;

    /**
     * Sortarray constructor.
     * @param array<int, int> $data
     */
    public function __construct(array $data)
    {
        $this->position = 0;
        $this->array = $data;
        $this->sort();
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    /**
     * @return int
     */
    public function current(): int
    {
        return $this->array[$this->position];
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return sizeof($this->array);
    }

    public function sort(): void
    {
        $positionI = $positionJ = 0;
        $size = $this->count();
        for ($positionI = 0; $positionI < $size; $positionI++) {
            for ($positionJ = $size - 1; $positionJ > $positionI; $positionJ--) {
                if ($this->array[$positionJ - 1] > $this->array[$positionJ]) {
                    $x = $this->array[$positionJ - 1];
                    $this->array[$positionJ - 1] = $this->array[$positionJ];
                    $this->array[$positionJ] = $x;
                }
            }
        }
    }
}
