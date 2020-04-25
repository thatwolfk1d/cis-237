<!DOCTYPE html>
<?php 
$document_root=$_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>MovieRater - Rating Results</title>
</head>
<body>
    <h1>Movie Rater: Rating Results</h1>
    <h2>Movie Ratings:</h2>

<?php
    @$fp = fopen("$document_root/ratings.txt", 'rb');
    $rating= fgets($fp);
    echo htmlspecialchars($order). "<br />";

    fclose($fp);
?>
</body>
</html>