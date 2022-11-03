<?php

namespace Patterns\AbstractFactory\Elements;

use Closure;
use Patterns\AbstractFactory\Contracts\Button;

class MacButton implements Button
{
    private Closure $callback;

    public function render()
    {
        echo 'Button rendered for Mac' . PHP_EOL;
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