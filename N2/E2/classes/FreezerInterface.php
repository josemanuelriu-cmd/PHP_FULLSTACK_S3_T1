<?php

interface FreezerInterface
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function cool(): void;
}