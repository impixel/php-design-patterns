<?php

namespace Patterns\Behavioural\Observer;

class Feed implements SplSubject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @var string
     */
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        $this->observers[$observerHash] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $observerHash = spl_object_hash($observer);
        unset($this->observers[$observerHash]);
    }

    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->content . " on ". $this->name . ".";
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}
