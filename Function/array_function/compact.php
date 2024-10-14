<?php

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);

echo"<pre>";
print_r($result);
echo"<pre>";
?>