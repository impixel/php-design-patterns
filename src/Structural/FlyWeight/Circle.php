<?php

namespace Patterns\Structural\FlyWeight;

class Circle implements Shape
{
    /**
     * @var string
     */
    private $colour;

    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var int
     */
    private $radius;

    public function __construct(string $colour)
    {
        $this->colour = $colour;
    }

    public function setX(int $x)
    {
        $this->x = $x;
    }

    public function setY(int $y)
    {
        $this->y = $y;
    }

    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        return "Drawing circle which is " . $this->colour . " at [" . $this->x .
            ", " . $this->y . "] of radius " . $this->radius . ".";
    }
}
