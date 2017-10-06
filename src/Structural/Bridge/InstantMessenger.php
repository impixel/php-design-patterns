<?php

namespace Patterns\Structural\Bridge;

class InstantMessenger implements Messenger
{
    public function send($body)
    {
        return "InstantMessenger: " . $body;
    }
}
