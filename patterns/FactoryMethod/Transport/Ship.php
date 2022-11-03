<?php

namespace Patterns\FactoryMethod\Transport;

use Patterns\FactoryMethod\Transport\Contracts\Transport;

class Ship implements Transport
{

    public function load(): void
    {
        echo 'Loading cargo' . PHP_EOL;
    }

    public function deliver(string $transport): void
    {
        echo 'Delivering cargo by ' . $transport . PHP_EOL;
    }

    public function unload(): void
    {
        echo 'Unloading cargo' . PHP_EOL;
    }
}