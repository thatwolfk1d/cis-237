<!DOCTYPE html>
<html>
<?php require("head.php");?>


<!--PART1-->
<!--Build an html form to enter movie information-->
<body>
    
    <!--Bootstrap navbar-->
<?php require("nav.php");?>


    
    <!--Form-->
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



</body>

    </html>








