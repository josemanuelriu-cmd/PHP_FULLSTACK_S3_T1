<?php

interface HeaterInterface
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function heat(): void;
}