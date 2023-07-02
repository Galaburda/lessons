<?php

define('ROOT', dirname(__DIR__));
include_once ROOT . '/vendor/autoload.php';

use Transport\Bicycle;
use Transport\Car;
use Transport\Boat;
use Transport\TransportCollection;

$bicycle = new Bicycle('Crossbike', 30,6);
$car = new Car('Volvo', 250, 5);
$boat = new Boat('BARK B-220C', 10, 4);

echo $bicycle->getInfo() . PHP_EOL;
echo $car->getInfo() . PHP_EOL;
echo $boat->getInfo() . PHP_EOL;

echo $bicycle->ringBell() . PHP_EOL;
echo $car->startEngine() . PHP_EOL;
echo $boat->sail() . PHP_EOL;

$arr = [$bicycle, $car, $boat];
foreach ($arr as $value)
{
    echo get_class($value)  . ' ';
    $value->getinfo() . PHP_EOL;
}
