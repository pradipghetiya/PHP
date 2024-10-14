<?php

$ar1 = array(10, 100, 100, 30);
$ar2 = array(1, 3, 2, 5);
array_multisort($ar1, $ar2);

echo"<pre>";
print_r($ar1);
print_r($ar2);
echo"<pre>";
?>