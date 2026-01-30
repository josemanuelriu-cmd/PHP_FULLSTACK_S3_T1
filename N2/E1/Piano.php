<?php

class Piano implements InstrumentInterface
{
    public function play(): void
    {
        echo "🎹 Playing the piano\n";
    }
}
