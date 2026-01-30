<?php

class Guitar implements InstrumentInterface
{
    public function play(): void
    {
        echo "🎸 Strumming the guitar\n";
    }
}
