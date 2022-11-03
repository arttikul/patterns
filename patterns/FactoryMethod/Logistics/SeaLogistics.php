<?php

namespace Patterns\FactoryMethod\Logistics;

use Patterns\FactoryMethod\Transport\Contracts\Transport;
use Patterns\FactoryMethod\Transport\Ship;

class SeaLogistics extends Logistics
{

    public function createTransport(): Transport
    {
        return new Ship();
    }
}