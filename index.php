<?php
require_once __DIR__ . '/Models/Movie.php';

// creazione di una nuova instanza di classe movie

$movie = new Movie( '1917', 'Sir Roger Alexander Deakins', '23 luglio 2020');


$movie_2 = new Movie( 'Paparazzi (film 1998)', 'Carlo Tafani', '18 dicembre 1998' );


var_dump($movie, $movie_2);
?>