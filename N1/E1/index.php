<?php

require_once('Athlete.php');
require_once('Event.php');
require_once('Results.php');
require_once('OlimpicGames.php');


$olympics = new OlympicGames();

$athlete1 = new Athlete("Usain Bolt", "Jamaica");
$athlete2 = new Athlete("Michael Phelps", "USA");
$event1 = new Event("100m lisos", "2024-08-01");
$event2 = new Event("Natación", "2024-08-02");
$result1 = new Results($event1, $athlete1, "Oro");
$result2 = new Results($event2, $athlete2, "Oro");
$olympics->addAthlete($athlete1);
$olympics->addAthlete($athlete2);
$olympics->addEvent($event1);
$olympics->addEvent($event2);
$olympics->addResult($result1);
$olympics->addResult($result2);

$olympics->processOlympicData();

?>