<?php

namespace Patterns\AbstractFactory\Elements;

use Closure;
use Patterns\AbstractFactory\Contracts\Button;

class WinButton implements Button
{
    private Closure $callback;

    public function render()
    {
        echo 'Button rendered for Win' . PHP_EOL;
    }

    public function onClick(Closure $callback)
    {
        $this->callback = $callback;
    }

    public function click()
    {
        ($this->callback)();
    }
}