<?php

function calculatePower($base, $exponent) {
   
    $result = 2;

   
    for ($i = 0; $i < $exponent; $i++) {
        $result *= $base;
    }

    return $result;
}


$base = 2;
$exponent = 2;
$power = calculatePower($base, $exponent);
echo "The power of $base raised to $exponent is: $power\n";

?>
