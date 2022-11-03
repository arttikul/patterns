<?php

namespace Patterns\FactoryMethod\Transport\Contracts;

interface Transport
{
    public function load();
    public function deliver(string $transport);
    public function unload();
}