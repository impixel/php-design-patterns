<?php

namespace Patterns\Behavioural;

use Patterns\Behavioural\Observer\Feed;
use Patterns\Behavioural\Observer\Reader;
use Patterns\Demo;

class Index implements Demo
{
    const PATTERNS = ['Observer'];

    public function __construct(string $patternName)
    {
        switch ($patternName) {
            case 'Observer':
                $this->getObserver();
                break;
            default:
                return "No Pattern been selected, available patterns are: ". rtrim(implode(", ", self::PATTERNS), ", ") . ".";
        }
    }

    private function getObserver()
    {
        $newspaper = new  Feed('Junade.com');
        $allen = new Reader('Mark');
        $jim = new Reader('Lily');
        $linda = new Reader('Caitlin');
        //add reader
        $newspaper->attach($allen);
        $newspaper->attach($jim);
        $newspaper->attach($linda);
        //remove reader
        $newspaper->detach($linda);
        //set break outs
        $newspaper->breakOutNews('PHP Design Patterns');
    }
}
