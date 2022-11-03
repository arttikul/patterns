<?php

namespace Patterns\FactoryMethod\Logistics;

use Patterns\FactoryMethod\Transport\Contracts\Transport;

abstract class Logistics
{
    public function createDelivery(string $transportName): void
    {
        $transport = $this->createTransport();
        $transport->load();
        $transport->deliver($transportName);
        $transport->unload();
    }

    public abstract function createTransport(): Transport;
}