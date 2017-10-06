<?php

namespace Patterns\Structural\Bridge;

class SMS implements Messenger
{
    public function send($body)
    {
        return "SMS: " . $body;
    }
}
