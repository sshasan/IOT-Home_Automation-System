<?php 
$myfile = fopen("temp.txt", "r") or die("Unable to open file!");

$data = explode(" ", fgets($myfile));
echo round($data[1],1);

fclose($myfile);

// echo $id;