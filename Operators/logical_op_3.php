<?php

$a = 42;
$b = 0;

if($a && $b){
	echo "both a and b true";
	
}else{
	echo"either a or b is false"."<br>";
	
}

if ($a and $b){
	echo "both a and b is true";
}else{
	echo "either a or b is false"."<br>";
}


if($a || $b){
	echo"either a or b is true";
}else {
	echo "both a and b false"."<br>";
	
}

if ($a or $b){
	echo "either a or b is true";
}else{
	echo "both a or b is false";
}






?>