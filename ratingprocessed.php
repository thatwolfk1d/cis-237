<!DOCTYPE html>
<?php
    $mname=$_POST['mname'];
    $dname=$_POST['dname'];
    $artist=$_POST['artist'];
    $genre=$_POST['genre'];
    $rating=$_POST['rating'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>MovieRater - Rating Confirmation</title>
</head>
<body>
    <h1>MovieRater</h1>
    <h2>Rating Confirmed!</h2>
    <?php
        echo '<p>Rating Confirmed at ';
        echo date( format 'H:i jS F Y');
        echo '</p>';
        echo $POST_

    ?>
</body>
</html>