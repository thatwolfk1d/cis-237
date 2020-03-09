<?php

//$content = "$movie_name,$director_name,$artist,$genre,$rating\n";
$document_root=$_SERVER['DOCUMENT_ROOT'];
$path = "$document_root/ratings.txt";

require("FileMovieManager.php");
require("Movie.php");


/*
Prints @param array $array */
 
function printArray(array $array) {
            echo'<pre>' . print_r($array, true) . '</pre>';
        }

//Writes $content of form to $file - error handling included
/*function writeToFile(string $file, string $content) : bool {
    $fp = fopen($file, 'ab');
        if (!$fp) {
            return false;
}
        if (!fwrite($fp, $content)) {
            return false;
}
        if (!fclose($fp)) {
            return false;
        }
        return true;
        }*/

?>