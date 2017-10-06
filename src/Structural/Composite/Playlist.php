<?php

namespace Patterns\Structural\Composite;

class Playlist implements Music
{
    /**
     * @var Music[]
     */
    private $songs = [];

    public function addSong(Music $content): bool
    {
        $this->songs[spl_object_hash($content)] = $content;

        return true;
    }
    public function removeItem(Music $content): bool
    {
        unset($this->songs[spl_object_hash($content)]);

        return true;
    }

    public function play()
    {
        foreach ($this->songs as $content) {
            $content->play();
        }
    }
}
