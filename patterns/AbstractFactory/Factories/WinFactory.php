<?php

namespace Patterns\AbstractFactory\Factories;

use Patterns\AbstractFactory\Contracts\Button;
use Patterns\AbstractFactory\Contracts\Checkbox;
use Patterns\AbstractFactory\Contracts\GUIFactory;
use Patterns\AbstractFactory\Elements\WinButton;
use Patterns\AbstractFactory\Elements\WinCheckbox;

class WinFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new WinButton;
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}