<?php
class Movie{

    // ambito di visibilità + nome della variabile di instanza
    
    public $nomeFilm;
    public $direttoreFotografia;
    public $date;

    public function getName(){
        return $this -> nomeFilm;
    }
}

?>