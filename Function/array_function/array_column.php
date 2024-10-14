<?php

$records = array(
    array(
        'id' => 22,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 32,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 42,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 23,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
 echo"<pre>";
$first_names = array_column($records, 'last_name');
print_r($first_names);

?>

