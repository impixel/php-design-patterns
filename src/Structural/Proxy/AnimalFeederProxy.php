<?php

namespace Patterns\Structural\Proxy;

class AnimalFeederProxy
{
    protected $instance;

    public function __construct(string $feeder, string $name)
    {
        $class = __NAMESPACE__ . '\\AnimalFeeder\\' . $feeder;
        $this->instance = new $class($name);
    }

    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->instance, $name], $arguments);
    }
}
