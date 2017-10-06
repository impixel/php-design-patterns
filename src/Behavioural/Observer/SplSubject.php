<?php

namespace Patterns\Behavioural\Observer;

interface SplSubject
{
    public function attach (SplObserver $observer);
    public function detach (SplObserver $observer);
    public function notify ();
}
