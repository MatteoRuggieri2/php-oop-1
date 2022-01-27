<?php 

    class Movie {

        public $title;

        public $date;

        public $vote = 0;

        function __construct($_title) {
            $this->title = $_title;
        }

    }

    $film1 = new Movie('ritorno al futuro');
    // $film1->title = 'ritorno al futuro';

    var_dump($film1->title);

?>