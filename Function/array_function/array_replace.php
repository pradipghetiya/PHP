<?php


$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(1 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);

echo"<pre>";
print_r($basket);

?>