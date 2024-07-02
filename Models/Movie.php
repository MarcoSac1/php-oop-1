<?php
class Movie{

    // ambito di visibilità + nome della variabile di instanza
    
    public $nomeFilm;
    public $direttoreFotografia;
    public $date;

    // creo un metodo costruttore
    function __construct($_nomeFilm, $_direttoreFotografia, $_date){
        $this -> nomeFilm = $_nomeFilm;
        $this -> direttoreFotografia = $_direttoreFotografia;
        $this-> date = $_date;
    }
    
    public function getName(){
        return $this -> nomeFilm;
    }
}

?>