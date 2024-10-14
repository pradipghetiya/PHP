<?php

$a = array("bill"=> 10,"joi"=>20);

$newarray = array_change_key_case($a, CASE_UPPER);


print_r($newarray);

?>