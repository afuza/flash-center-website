<?php
print_r($_POST);
?>

<?php
print_r($_GET);
?>

<?php

$rand = rand(1, 9);
$rand1 = rand(1, 9);
$rand2 = rand(1, 9);
$rand3 = rand(1, 9);

$qust = ("$rand$rand1$rand2$rand3");

echo $qust; 
?>