<?php

require_once 'FreezerInterface.php';

class TurboFreezer implements FreezerInterface
{
    public function turnOn(): void
    {
        echo "Turbo freezer on\n";
    }

    public function turnOff(): void
    {
        echo "Turbo freezer off\n";
    }

    public function cool(): void
    {
        echo "Cooling the food\n";
    }    
}