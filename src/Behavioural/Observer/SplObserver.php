<?php

namespace Patterns\Behavioural\Observer;

interface SplObserver  {
    public function update (SplSubject $subject);
}
