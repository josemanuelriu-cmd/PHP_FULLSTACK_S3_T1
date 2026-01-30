<?php

require_once('MovableInterface.php');

class Ghost implements MovableInterface
{
    public function move(): void
    {
        echo "The ghost floats silently.\n";
    }

}