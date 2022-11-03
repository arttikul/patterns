<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\Contracts\Button;
use Patterns\AbstractFactory\Contracts\Checkbox;
use Patterns\AbstractFactory\Contracts\GUIFactory;

class Application
{
    private GUIFactory $factory;
    private Button  $button;
    private Checkbox $checkbox;

    /**
     * @param GUIFactory $factory
     */
    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return void
     */
    public function createUI()
    {
        $this->button = $this->factory->createButton();
        $this->checkbox = $this->factory->createCheckbox();
    }

    /**
     * @return Button
     */
    public function getButton(): Button
    {
        return $this->button;
    }

    /**
     * @return Checkbox
     */
    public function getCheckbox(): Checkbox
    {
        return $this->checkbox;
    }
}