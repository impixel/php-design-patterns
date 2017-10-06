<?php

namespace Patterns\Structural\Bridge;

abstract class Device implements Transmitter
{
    /**
     * @var Messenger
     */
    protected $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender = $sender;
    }
}
