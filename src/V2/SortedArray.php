<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\V2;

use Exception;
use Iterator;
use Traversable;

/**
 * Class SortedArray
 * @package Otis22\FridayExercise\V2
 * @implements \IteratorAggregate<int, int>
 */
final class SortedArray implements \IteratorAggregate
{
    /**
     * @var array<int, int>|Traversable<int, int>
     */
    protected $array;
    /**
     * @var Iterator<int,int>
     */
    protected $sorted;
    /**
     * SortedArray constructor.
     * @param array<int, int>|Traversable<int, int> $array
     */
    public function __construct($array)
    {
        $this->array = $array;
    }

    /**
     * @return Traversable<int, int>
     */
    public function getIterator(): Traversable
    {
        if (empty($this->sorted)) {
            $this->sorted = new \ArrayIterator(
                $this->sort(
                    iterator_to_array(
                        new AlwaysTraversable($this->array)
                    )
                )
            );
        }
        return $this->sorted;
    }

    /**
     * @param array<int,int> $array
     * @return array<int,int>
     */
    protected function sort(array $array): array
    {
        sort($array);
        return $array;
    }
}
