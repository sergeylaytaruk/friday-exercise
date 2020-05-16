<?php

declare(strict_types=1);

namespace packagetest;

class JoinedString
{
    /**
     * @var string
     */
    private $concatenatedString  = '';

    /**
     * JoinedString constructor.
     * @param string $glue
     * @param array<mixed> $data
     */
    public function __construct(string $glue, array $data)
    {
        $this->concatenatedString = join($glue, $data);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->concatenatedString;
    }
}
