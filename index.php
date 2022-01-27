<?php 

    class Movie {

        public $title;

        public $date;

        public $vote = 0;

    }

    $film1 = new Movie();
    $film1->title = 'ritorno al futuro';

    var_dump($film1)

?>