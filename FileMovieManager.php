<?php
require ("MovieManagerInterface.php");

class FileMovieManager implements MovieManagerInterface {
    private $path = '';

    function __construct(string $path) {
            $this->path = $path;
        }


    function create(Movie $Movie)
    {
        $fp = fopen($this->path, 'ab');
        if (!$fp) {
            return false;
    }
        $content = "$Movie->movie_name,$Movie->director_name,$Movie->artist,$Movie->genre,$Movie->rating\n";
        if (!fwrite($fp, $content)) {
            return false;
    }
        if (!fclose($fp)) {
            return false;
        }
      return true;
 
    }

    function read()
    {
    return file_get_contents($this->path);
    }

    function update()
    {
    //implement update() function here
    }   


    function delete()
    {
    //implement delete() function here
    }

}

$document_root=$_SERVER['DOCUMENT_ROOT'];
$path = "$document_root/ratings.txt";
$FileMovieManager = new FileMovieManager($path);

?>