<?php

declare(strict_types=1);

namespace packagetest;

class JoinedString
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
     * @var string
     */
    protected $glue;

    /**
     * JoinedString constructor.
     * @param string $glue
     * @param \Traversable $iterator
     */
    public function __construct(string $glue, \Traversable $iterator)
    {
        $this->traversable = $iterator;
        $this->glue = $glue;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        if (empty($this->concatenatedString)) {
            foreach ($this->traversable as $inx => $value) {
                if ($inx != 0 && $inx < count($this->traversable)) {
                    $this->concatenatedString .= $this->glue;
                }
                $this->concatenatedString .= $value;
            }
        }
        return $this->concatenatedString;
    }
}
