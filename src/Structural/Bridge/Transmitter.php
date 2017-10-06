<?php

namespace Patterns\Structural\Bridge;

interface Transmitter
{
    public function setSender(Messenger $sender);

    public function send($body);
}
