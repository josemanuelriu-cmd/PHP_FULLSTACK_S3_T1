<?php
class Event {
    private string $event;
    private string $date;

    public function __construct(string $event, string $date) {
        $this->event = $event;
        $this->date = $date;
    }
    public function getEventName(): string {
        return $this->event;
    }
    public function getDate(): string {
        return $this->date;
    }
}
?>