<?php
require("base.php");

$id=null;

if(isset($_GET) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $Movie = $FileMovieManager->readOneById($id);
}

if (isset($_POST) && !empty($_POST)) {
    extract($_POST);
    $Movie = new Movie($movie_name,$director_name,$artist,$genre,$rating);
    if ($FileMovieManager->update($id, $Movie)) {
        header('Location: ratingprocessed.php');
   }
}

?>


<!DOCTYPE html>
<html>
<?php require("head.php");?>
<body>
<!--Bootstrap navbar-->
<?php require("nav.php");?>

    <div class="container-fluid">
        <div class="row">
            <h1>Edit Rating</h1>
        </div>

        <div class="container-fluid">
       <h1>Movie Rating Form</h1>
        <form action="ratingprocessed.php" method="post">
        <label for="mname">Movie Name:</label> <span class="required">*</span>
        <input type="text" name="mname" placeholder="Movie Name" required /><br />

        <label for="dname">Director Name:</label> <span class="required">*</span>
        <input type="text" name="dname" placeholder="Director Name" required /><br />

        <label for="artists">Artists:</label>
        <input type="text" name="artist" placeholder="Artists" /><br />

        <label for="genre">Genre:</label>
        <select name="genre">
            <option selected></option>
            <option value="comedy">Comedy</option>
            <option value="horror">Horror</option>
            <option value="drama">Drama</option>
            <option value="documentary">Documentary</option>
            <option value="mystery">Mystery</option>
        </select><br />

        <h3>RATING:</h3>

        <input type="radio" name="rating" value="1" />
        <label for="1">1</label>

        <input type="radio" name="rating" value="2" />
        <label for="2">2</label>

        <input type="radio" name="rating" value="3" />
        <label for="3">3</label>

        <input type="radio" name="rating" value="4" />
        <label for="4">4</label>

        <input type="radio" name="rating" value="5" />
        <label for="5">5</label><br />

        <input type="submit" value="Submit" />


    </form>
    </div>


    </div>
</body>
</html>