<?php
$array = array(0 => 100, "color" => "red");
echo"<pre>";
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
echo"<pre>";
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
			   
echo"<pre>";			   
print_r(array_keys($array));
?>