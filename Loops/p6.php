<?php
$rows = 5; 

$i = 1;

do {

    $j = 1;
    do {
        echo $j . " ";
        $j++;
    } while ($j <= $i);

    echo "\n";
    $i++;
} while ($i <= $rows);
?>
