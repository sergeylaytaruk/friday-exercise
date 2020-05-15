<?php

declare(strict_types=1);

namespace Otis22\FridayExercise\V2;

use Exception;
use Traversable;
use Iterator;

/**
 * Class AlwaysIterator
 * @package Otis22\FridayExercise\V2
 * @implements \IteratorAggregate<int, int>
 */
final class AlwaysTraversable implements \IteratorAggregate
{
    /**
     * @var array<int, int>|Traversable<int, int>
     */
    protected $toTraversable;
    /**
     * @var Traversable<int, int>
     */
    protected $traversable;

    /**
     * AlwaysIterator constructor.
     * @param array<int, int>|Traversable<int, int> $toIterator
     */
    public function __construct($toIterator)
    {
        $this->toTraversable = $toIterator;
    }

    /**
     * @inheritDoc
     */
    public function getIterator(): Traversable
    {
        if (empty($this->traversable)) {
            $this->traversable = is_array($this->toTraversable)
                ? new \ArrayIterator($this->toTraversable)
                : $this->toTraversable;
        }
        return $this->traversable;
    }
}
