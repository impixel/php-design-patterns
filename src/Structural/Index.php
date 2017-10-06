<?php

namespace Patterns\Structural;

use Patterns\Structural\FlyWeight\ShapeFactory;
use Patterns\Structural\Composite\Song;
use Patterns\Structural\Composite\Playlist;

class Index
{
    public function __construct(string $patternName)
    {
        switch ($patternName) {
            case 'FlyWeight':
                return $this->getFlyWeight();
                break;
            case 'Composite':
                return $this->getComposite();
                break;
            default:
                return "No Pattern been selected";
        }
    }

    private function getFlyWeight()
    {
        $colours = ['red', 'blue', 'green', 'black', 'white', 'orange'];
        $factory = new ShapeFactory();
        for ($i = 0; $i < 100; $i++) {
            $randomColour = $colours[array_rand($colours)];
            $circle = $factory->getCircle($randomColour);
            $circle->setX(rand(0, 100));
            $circle->setY(rand(0, 100));
            $circle->setRadius(100);
            $circle->draw();
        }
    }

    private function getComposite()
    {
        $songOne = new Song('Lost In Stereo');
        $songTwo = new Song('Running From Lions');
        $songThree = new Song('Guts');
        $playlistOne = new Playlist();
        $playlistTwo = new Playlist();
        $playlistThree = new Playlist();
        $playlistTwo->addSong($songOne);
        $playlistTwo->addSong($songTwo);
        $playlistThree->addSong($songThree);
        $playlistOne->addSong($playlistTwo);
        $playlistOne->addSong($playlistThree);
        $playlistOne->play();
    }
}
