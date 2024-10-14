<?php

$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana','apple');

echo"<pre>";
print_r($a);
?>