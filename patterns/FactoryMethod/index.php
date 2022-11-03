<?php

namespace Patterns\FactoryMethod;

use Patterns\FactoryMethod\Logistics\Logistics;
use Patterns\FactoryMethod\Logistics\RoadLogistics;
use Patterns\FactoryMethod\Logistics\SeaLogistics;

require_once '../../vendor/autoload.php';

function main(Logistics $logistics, $transportType) {
    $logistics->createDelivery($transportType);
}

main(new SeaLogistics(), 'Ship');
echo PHP_EOL . PHP_EOL;
main(new RoadLogistics(), 'Truck');