<?php

namespace Patterns\Structural\Facade;

class Manufacturer
{
    /**
     * @var int
     */
    private $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function build(): string
    {
        return uniqid();
    }
}
