<?php

namespace Patterns\Structural\Facade;

class ToyShop
{
    /**
     * @var Post
     */
    private $courier;

    /**
     * @var Manufacturer
     */
    private $manufacturer;

    /**
     * @var SMS
     */
    private $sms;

    public function __construct(String $factoryAdress, String $contactNumber, int $capacity) {
        $this->courier = new Post($factoryAdress);
        $this->sms = new SMS($contactNumber);
        $this->manufacturer = new Manufacturer($capacity);
    }

    public function processOrder(string $address, $phone)
    {
        $item = $this->manufacturer->build();
        $this->courier->dispatch($item, $address);
        $this->sms->send($phone, "Your order has been shipped.");
    }
}
