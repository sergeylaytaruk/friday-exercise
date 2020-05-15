<?php

declare(strict_types=1);

namespace Otis22\FridayExercise;

final class StringConcatenatedByForeach
{
    /**
     * @var \Traversable<int,int>
     */
    protected $traversable;
    /**
     * @var string
     */
    protected $concatenatedString  = '';

    /**
     * ConcatenatedByForeach constructor.
     * @param \Traversable<int,int> $iterator
     */
    public function __construct(\Traversable $iterator)
    {
        $this->traversable = $iterator;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        if (empty($this->concatenatedString)) {
            foreach ($this->traversable as $value) {
                $this->concatenatedString .= $value;
            }
        }
        return $this->concatenatedString;
    }
}
