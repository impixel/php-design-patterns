<?php

namespace Patterns\Structural;

use Patterns\Structural\FlyWeight\ShapeFactory;
use Patterns\Structural\Composite\Song;
use Patterns\Structural\Composite\Playlist;
use Patterns\Structural\Bridge\Phone;
use Patterns\Structural\Bridge\SMS;
use Patterns\Structural\Proxy\AnimalFeeder\Cat;
use Patterns\Structural\Proxy\AnimalFeeder\Dog;
use Patterns\Structural\Proxy\AnimalFeederProxy;
use Patterns\Structural\Facade\ToyShop;

class Index
{
    public function __construct(string $patternName)
    {
        switch ($patternName) {
            case 'FlyWeight':
                $this->getFlyWeight();
                break;

            case 'Composite':
                $this->getComposite();
                break;

            case 'Bridge':
                $this->getBridge();
                break;

            case 'Proxy':
                $this->getProxy();
                break;

            case 'Facade':
                $this->getFacade();
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

    private function getBridge()
    {
        $phone = new Phone();
        $phone->setSender(new SMS());
        $phone->send("Hello there!");
    }

    private function getProxy()
    {
        /** @var Cat $felix */
        $felix = new AnimalFeederProxy('Cat', 'Felix');
        echo $felix->displayFood(1);
        echo "\n";
        echo $felix->dropFood(1, true);
        echo "\n";
        /** @var Dog $brian */
        $brian = new AnimalFeederProxy('Dog', 'Brian');
        echo $brian->displayFood(1);
        echo "\n";
        echo $brian->dropFood(1, true);
    }

    private function getFacade()
    {
        $childrensToyFactory = new ToyShop('1 Factory Lane, Oxfordshire',
            '07999999999', 5);
        $childrensToyFactory->processOrder('8 Midsummer Boulevard', '07123456789');

    }
}
