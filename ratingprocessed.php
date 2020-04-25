<!DOCTYPE html>
<html>
<?php require("head.php");?>
<body>

        <!--Bootstrap navbar-->
<?php require("nav.php");?>

    <div class="container-fluid">
<?php
        require("base.php");
        
    extract($_GET);
   
    if(!empty($movie_name)){

    $Movie = new Movie($movie_name,$director_name,$artist,$genre,$rating);
        if (!$FileMovieManager->create($Movie)) {
            $message = <<<EOT
            <div class="alert alert-danger" role="alert">Failed to write to file.</div>
            EOT;
            } 
        else {
                $message = <<<EOT
                <div class="alert alert-success" role="alert">Success!</div>
                EOT;
        }
    }
    echo $message;
?>
        </div>
</body>
</html>