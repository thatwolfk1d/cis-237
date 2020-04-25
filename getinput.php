<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>MovieRater - Write to file</title>
</head>

<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

$fp = fopen("$document_root/orders.txt", 'ab');

$outputstring = $date.'\t'.$mname.' :Movie Name \t'.$dname.' :Director Name \t'.$artist.' :Artist \t'.$genre.' :Genre \t'.$rating.' :Rating \n';





fwrite($fp, $outputstring, strlen($outputstring));
fclose($fp);

echo "<p>Rating Written</p>"