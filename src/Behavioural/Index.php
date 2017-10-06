<?php

namespace Patterns\Behavioural;

class Index
{
    public function __construct(string $patternName)
    {
        switch ($patternName) {
            case 'Observer':
                $this->getObserver();
                break;

            default:
                return 'No pattern been selected';
        }
    }

    private function getObserver()
    {
    }
}
