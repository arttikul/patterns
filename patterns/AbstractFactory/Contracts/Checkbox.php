<?php

namespace Patterns\AbstractFactory\Contracts;

interface Checkbox
{
    public function render();

    public function checked();
}