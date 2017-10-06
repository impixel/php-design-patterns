<?php

namespace Patterns\Structural\Bridge;

class Tablet extends Device
{
    public function send($body)
    {
        $body .= "\n\n Sent from a Tablet.";
        return $this->sender->send($body);
    }
}
