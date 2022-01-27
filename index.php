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

        public function movieFormat() {
            $formattedMovie = $this->title . ' - ' . $this->date . ' | ' . $this->vote;
            return $formattedMovie;
        }

    }

    $film1 = new Movie('Ritorno al Futuro', '1985', 8.5);

    $film2 = new Movie('Fast & Furious 6', '2013', 7);

    $film3 = new Movie('Harry Potter e la pietra filosofale', '2001');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        <h1>Movies</h1>
        <ul>
            <li><?php echo $film1->movieFormat() ?></li>
            <li><?php echo $film2->movieFormat() ?></li>
            <li><?php echo $film3->movieFormat() ?></li>
        </ul>
    </main>
</body>
</html>