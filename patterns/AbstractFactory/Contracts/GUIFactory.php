<?php

namespace Patterns\AbstractFactory\Contracts;

interface GUIFactory
{
    public function createButton(): Button;

    public function createCheckbox(): Checkbox;
}