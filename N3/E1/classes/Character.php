<?php

require_once('MovableInterface.php');
require_once('AttackerInterface.php');

class Character implements MovableInterface, AttackerInterface
{
    public function move(): void
    {
        echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }
}