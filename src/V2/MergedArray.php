<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\V2;

use Exception;
use Traversable;
use Iterator;

/**
 * Class MergedArray
 * @package Otis22\FridayExercise\V2
 * @implements \IteratorAggregate<int,int>
 */
final class MergedArray implements \IteratorAggregate
{
    /**
     * @var array<int,int>|Traversable<int,int>
     */
    protected $array1;
    /**
     * @var array<int,int>|Traversable<int,int>
     */
    protected $array2;
    /**
     * @var Iterator<int,int>
     */
    protected $merged;
    /**
     * MergedArray constructor.
     * @param array<int,int>|Traversable<int,int> $array1
     * @param array<int,int>|Traversable<int,int> $array2
     */
    public function __construct($array1, $array2)
    {
        $this->array1 = $array1;
        $this->array2 = $array2;
    }


    /**
     * @inheritDoc
     */
    public function getIterator(): Traversable
    {
        if (empty($merged)) {
            $this->merged = new \ArrayIterator(
                array_merge(
                    iterator_to_array(new AlwaysTraversable($this->array1)),
                    iterator_to_array(new AlwaysTraversable($this->array2))
                )
            );
        }
        return $this->merged;
    }
}
