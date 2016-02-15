<?php

require_once 'autoload.php';

$car1 = new Auto();
$car1->setModel('Honda Accord');
$car1->setMaxSpeed('210 km/h');
$car1->setCurrentSpeed('145 km/h');
$car1->setColor('maroon');
$car1->setCurrentGear(5);
$car1->accelerate(180);
$car1->changeGearDown();
$car1->changeGearDown();
$car1->changeGearUp();
$car1->changeGear(2);
$car1->changeColor('cobalt');
echo $car1->getInfo(). PHP_EOL;

$car2 = new Auto();
$car2->setModel('Ford Shelby GT350 Mustang');
$car2->setMaxSpeed('260 km/h');
$car2->setCurrentSpeed('160 km/h');
$car2->setColor('black');
$car2->setCurrentGear(5);
echo $car2->getInfo(). PHP_EOL;

$car1->setCurrentSpeed('40 km/h');
$car1->setCurrentGear(3);
echo $car1->getInfo(). PHP_EOL;