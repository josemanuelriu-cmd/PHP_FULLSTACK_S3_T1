<?php

interface WasherInterface
{
    public function turnOn(): void;
    public function turnOff(): void;
    public function wash(): void;
}