<?php

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
	
$result = array_merge_recursive($ar1, $ar2);

echo"<pre>";
print_r($result);
echo"<pre>";
?>