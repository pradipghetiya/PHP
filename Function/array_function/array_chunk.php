<?php

$input_array = array("F" => 1, "S" => 4,"c"=>5, "D"=>6,"E"=>65);

$new_array = array_chunk($input_array,3);
echo"<pre>";
print_r($new_array);

?>