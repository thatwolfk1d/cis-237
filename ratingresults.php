<!DOCTYPE html>
<?php 

?>
<html>
<?php require("head.php");?>
<body>

        <!--Bootstrap navbar-->
<?php require("nav.php");?>

    <div class="container">
    <h1>Movie Rater: Rating Results</h1>
    <h2>Movie Ratings:</h2>

<?php
require("base.php");
$list = $fileMovieManager->read();
$ratings = explode("\n", trim($list));
$table_body = '';
foreach($ratings as $movierating) {
        $table_body .= '<tr>';
        $movie_name = explode(',', trim($movierating));
        $table_body .= '<td>' .$movie_name[0] . '</td>';
        $table_body .= '<td>' .$movie_name[1] . '</td>';
        $table_body .= '<td>' .$movie_name[2] . '</td>';
        $table_body .= '<td>' .$movie_name[3] . '</td>';
        $table_body .= '<td>' .$movie_name[4] . '</td>';
        $table_body .= '<td><a href="edit.php?id=' . $key . '" class=btn btn-info btn-sm">Edit</a></td>';
        $table_body .= '</tr>';
}
?>
 
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Movie Name</th>
                        <th>Director Name</th>
                        <th>Artist</th>
                        <th>Genre</th>
                        <th>Rating</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $table_body; ?>

                </tbody>
            </table>

        </div>
    
    </div>
</body>
</html>