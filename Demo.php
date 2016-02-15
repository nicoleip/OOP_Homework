<?php
require_once 'autoload.php';


$person = new Person('Nikol', 121213048, false, 500000);
$person2 = new Person('Ivan', 12123048, true, 200000);
$car = new Car('Honda Accord', 36000, true , 'white', 260);
$car2 = new Car('Nissan GTR', 150000, true, 'black', 320);

$carShop = new CarShop();
$carShop->addCar($car);
$carShop->addCar($car2);

echo ' The price of the '. $car->getModel() . ' for scrap is ' . $car->calculatePriceForScrap(10000).'.' , PHP_EOL;
echo $person->buyCar($car2) , PHP_EOL;
echo 'After buying a new ' .$person->getCar()->getModel().', '
		. $person->getName(). ' has '.$person->getMoney(). ' money left.' , PHP_EOL;

echo 'After selling the car for scrap, ' . $person->getName(). ' has '.$person->sellCarForScrap(15000). ' money left.' , PHP_EOL;

$car2->changeOwner($person2);
echo 'The new owner of the ' . $car2->getModel(). ' is: ' . $car2->getOwner()->getInfo();