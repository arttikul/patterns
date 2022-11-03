<?php

namespace Patterns\AbstractFactory\Contracts;

use Closure;

interface Button
{
    public function render();

    public function onClick(Closure $callback);

    public function click();
}