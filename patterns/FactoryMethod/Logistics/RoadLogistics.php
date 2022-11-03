<?php

namespace Patterns\FactoryMethod\Logistics;

use Patterns\FactoryMethod\Transport\Contracts\Transport;
use Patterns\FactoryMethod\Transport\Truck;

class RoadLogistics extends Logistics
{

    public function createTransport(): Transport
    {
        return new Truck();
    }
}