<?php

 $a = 42;
 $b = 0;
 
 
  if ($a && $b) {
	  echo "test1 : both a and b is true";
  }
	else {
		echo "test1 : either a or b is false"."<br>";
	}
	
  if ($a and $b){
	  echo "test2 : both a and b true";
  }
  else {
	  echo "test2 : either a or b is false"."<br>";
  }
  
  if ($a || $b) {
	  echo "test3 : either a or b is true";
  }
  else {
	  echo "test3 : both a and b is false". "<br>";
  }
  
  if ($a or $b){
	  echo "test4 : either a or b is true";
  }
  else {
	  
	 echo "test4 : both a and b are false";
  }  
  
?>