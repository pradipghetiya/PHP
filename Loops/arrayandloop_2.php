<?php

$employees = array(
    array("name" => "John Doe", "position" => "Manager", "age" => 30),
    array("name" => "Jane Smith", "position" => "Developer", "age" => 28),
    array("name" => "Michael Johnson", "position" => "Designer", "age" => 33),
    array("name" => "Emily Brown", "position" => "Marketing", "age" => 25)
);


$numEmployees = count($employees);

echo "<h2>New Company Employees</h2>";
echo "<ul>";

for ($i = 0; $i < $numEmployees; $i++) {
    echo "<li><strong>Name:</strong> " . $employees[$i]['name'] . ", ";
    echo "<strong>Position:</strong> " . $employees[$i]['position'] . ", ";
    echo "<strong>Age:</strong> " . $employees[$i]['age'] ."</li>";
}
echo "</ul>";

?>
