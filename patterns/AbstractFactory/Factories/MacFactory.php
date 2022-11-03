<?php

namespace Patterns\AbstractFactory\Factories;

use Patterns\AbstractFactory\Contracts\Button;
use Patterns\AbstractFactory\Contracts\Checkbox;
use Patterns\AbstractFactory\Contracts\GUIFactory;
use Patterns\AbstractFactory\Elements\MacButton;
use Patterns\AbstractFactory\Elements\MacCheckbox;

class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton;
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox;
    }
}