<?php 

    class Movie {

        public $title;

        public $date;

        public $vote;

        function __construct($_title, $_date = null, $_vote = 0) {
            $this->title = $_title;
            $this->date = $_date;
            $this->vote = $_vote;
        }

    }

    $film1 = new Movie('Ritorno al Futuro', '1985', 8.5);
    var_dump($film1);

    $film2 = new Movie('Fast & Furious 6', '2013', 7);
    var_dump($film2);

    $film3 = new Movie('Harry Potter e la pietra filosofale', '2001');
    var_dump($film3);



?>