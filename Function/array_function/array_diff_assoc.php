<?php

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red","c"=>"blue");

$newarray = array_diff_assoc($array1, $array2);

echo"<pre>";
print_r($newarray);
?>