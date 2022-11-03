<?php

use Patterns\AbstractFactory\Application;
use Patterns\AbstractFactory\Factories\MacFactory;
use Patterns\AbstractFactory\Factories\WinFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$winApp = new Application(new WinFactory);
$winApp->createUI();
$winButton = $winApp->getButton();
$winButton->render();
$winButton->onClick(function () {
    echo 'win button clicked' . PHP_EOL;
});
$winButton->click();

echo PHP_EOL . PHP_EOL . PHP_EOL;

$macApp = new Application(new MacFactory);
$macApp->createUI();
$macButton = $winApp->getButton();
$macButton->render();
$macButton->onClick(function () {
    echo 'mac button clicked' . PHP_EOL;
});
$macButton->click();

$macCheckbox = $macApp->getCheckbox();
$macCheckbox->render();
$macCheckbox->checked();
$macCheckbox->checked();
$macCheckbox->checked();