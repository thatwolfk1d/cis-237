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
        echo date('H:i jS F Y');
        echo '</p>';
            
        echo '<p>Your rating was processed with the following details:</p>';
        echo 'Movie Name:'. htmlspecialchars($mname).'<br/>';
        echo 'Director Name:'. htmlspecialchars($dname).'<br/>';
        echo 'Artists:'. htmlspecialchars($artist). '<br/>';
        echo 'Genre:'. htmlspecialchars($genre). '<br/>';
        echo 'Rating:'. htmlspecialchars($rating). '<br/>';
        
        





    ?>
</body>
</html>