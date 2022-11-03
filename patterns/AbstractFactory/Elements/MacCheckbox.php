<?php

namespace Patterns\AbstractFactory\Elements;

use Patterns\AbstractFactory\Contracts\Checkbox;

class MacCheckbox implements Checkbox
{
    private bool $checked = false;

    public function render()
    {
        echo 'Checkbox rendered for Mac' . PHP_EOL;
    }

    public function checked()
    {
        $this->checked = !$this->checked;

        echo $this->checked . PHP_EOL;
    }
}