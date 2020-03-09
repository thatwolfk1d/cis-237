<?php
class Movie {
    private $movie_name = '';
    private $director_name = '';
    private $artist = '';
    private $genre = '';
    private $rating = 0;


function __construct($movie_name, $director_name, $artist, $genre, $rating) {
    $this->setMovieName($movie_name);
    $this->setDirectorName($director_name);
    $this->setArtist($artist);
    $this->setGenre($genre);
    $this->setRating($rating);
}

function __get($attr_name) {
    return $this->$attr_name;
}


function __set($attr_name, $value) {
    $attr_name = str_replace('_', ' ', $attr_name);
    $attr_name = ucwords($attr_name);
    $attr_name = str_replace(' ', '', $attr_name);
    $function = "set$attr_name";
    var_dump($function);
    $this->$function($value);
    //$this->$attr_name = $value;
}

    function setMovieName($movie_name) {
        $this->movie_name = ucwords(trim($movie_name));
    }

    function setDirectorName($director_name){
        $this->director_name = ucwords(trim($director_name));
    }

    function setArtist($artist) {    
        $this->artist = ucwords(trim($artist));
        if(empty($artist)){
            $artist = 0;
        }
        $this->artist = $artist;
}

    function setGenre($genre) {
        $this->genre = ucwords(trim($genre));
        if(empty($genre)){
            $genre = 0;
        }
        $this->genre = $genre;
    }

    function setRating($rating) {
        $rating = trim($rating);
        if(empty($rating)) {
            $rating = 1;
        }
        $this->rating = $rating;
    }



}

 /* if(empty($artist)){
        $artist = 0;
        }

    if(empty($genre)){
        $genre = 0;
        }
        
    if(empty($rating)){
        $rating = 0;
        }

    */




?>