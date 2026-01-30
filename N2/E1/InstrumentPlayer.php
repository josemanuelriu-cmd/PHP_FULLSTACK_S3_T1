<?php

include_once 'InstrumentInterface.php';
include_once 'Guitar.php';
include_once 'Drums.php';
include_once 'Piano.php';

class InstrumentPlayer
{
    public function play(InstrumentInterface $instrument): void
    {
        $instrument->play();
    }
}
$player = new InstrumentPlayer();
$player->play(new Guitar());
$player->play(new Drums());
$player->play(new Piano());