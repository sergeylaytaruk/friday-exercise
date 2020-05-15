<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\V1;

/**
 * @template T
 *
 * @implements \Iterator<int, int>
 */
final class MergedArray implements \Iterator
{
    /**
     * @var int
     */
    private $position = 0;
    /**
     * @var array<int,int>
     */
    private $array = [];

    /**
     * MargedArray constructor.
     * @param array<int, int> $array1
     * @param array<int, int> $array2
     */
    public function __construct(array $array1, array $array2)
    {

        $this->array = array_merge($array1, $array2);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current(): int
    {
        return $this->array[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}
