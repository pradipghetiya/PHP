<?php

function gcd($a, $b) {
	
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}


$num1 = 20;
$num2 = 30;

$gcd_result = gcd($num1, $num2);
$lcm_result = lcm($num1, $num2);

echo "The GCD of $num1 and $num2 is: $gcd_result\n";
echo "The LCM of $num1 and $num2 is: $lcm_result\n";

?>
