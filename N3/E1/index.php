<?php

include_once('classes/Character.php');
include_once('classes/Ghost.php');


function doCombat(Character $character)
{
    $character->move();
    $character->attack(); 
}

$enemy = new Character();
doCombat($enemy); 

$Babetas = new Ghost();
$Babetas->move();