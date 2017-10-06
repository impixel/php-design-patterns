<?php

namespace Patterns\Structural\Composite;

class Song implements Music
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    public function  __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
    }

    public function play()
    {
        return printf("Playing song #%s, %s.\n", $this->id, $this->name);
    }
}
