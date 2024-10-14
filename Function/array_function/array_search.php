<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); 
$key = array_search('red', $array);   

echo"<pre>";
print_r($key);

?>