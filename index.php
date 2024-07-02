<?php
require_once __DIR__ . '/Models/Movie.php';

// creazione di una nuova instanza di classe movie

$movie = new Movie();
$movie -> nomeFilm ='1917';
$movie -> direttoreFotografia ='Sir Roger Alexander Deakins';
$movie -> date ='23 luglio 2020';

$movie_2 = new Movie();
$movie_2 -> nomeFilm ='Paparazzi (film 1998)';
$movie_2 -> direttoreFotografia ='Carlo Tafani';
$movie_2 -> date ='18 dicembre 1998';

var_dump($movie -> getName(), $movie_2 -> getName() );
?>