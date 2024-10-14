<?php

$x = 0;    
$y = 1; 

$i=0;
	
for($i=0;$i<=10;$i++)    
{    

    $z =$x + $y;
    
    echo $z."<br>";  

    $x=$y=$z;
	
   
}   



?>