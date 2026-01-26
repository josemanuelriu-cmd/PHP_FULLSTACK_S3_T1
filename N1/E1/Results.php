<?php
class Results {
    private Event $event;
    private Athlete $athlete;
    private string $medal;

    public function __construct(Event $event,Athlete $athlete, string $medal) {
        $this->event = $event;
        $this->athlete = $athlete;        
        $this->medal = $medal;
    }
    public function getEvent(): Event {
        return $this->event;
    }
    public function getAthlete(): Athlete {
        return $this->athlete;
    }
    public function getMedal(): string {
        return $this->medal;
    }
}
?>