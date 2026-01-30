<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';
require_once 'classes/TurboFreezer.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();
$freezer = new TurboFreezer();


$heater->turnOn();
$heater->heat();
$heater->turnOff();


echo "\n";

$washer->turnOn();
$washer->wash();
$washer->turnOff();


echo "\n";

$freezer->turnOn();
$freezer->cool();
$freezer->turnOff();


?>