<?php

class OlympicGames {
    private $athletes = [];
    private $events = [];
    private $results = [];

    public function addAthlete($athlete){
        $this->athletes[] = ['name' => $athlete->getName(), 'country' => $athlete->getCountry()];        
    }
    public function addEvent($event) {
        $this->events[] = ['event' => $event->getEventName(), 'date' => $event->getDate()];
    }
    public function addResult($result) {
        $this->results[] = [
            'athlete' => $result->getAthlete()->getName(),
            'country' => $result->getAthlete()->getCountry(),
            'event' => $result->getEvent()->getEventName(),
            'medal' => $result->getMedal()            
        ];
    }
    public function processOlympicData():void {      
         echo "Resultados juegos olimpicos:\n";
        foreach ($this->results as $result) {
            $mensaje = "Evento: " . $result['event'] . "\n";            
            $mensaje .= "- " . $result['athlete'] . " de " . $result['country'] . " gano la medalla de " . $result['medal'] . "\n";          
            echo $mensaje;
        }
    }
}
?>