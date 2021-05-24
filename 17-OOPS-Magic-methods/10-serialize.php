<?php
//serialize — Generates a storable representation of a value
$data = serialize(array("Red", "Green", "Blue"));
echo $data . "<br>";

$test = unserialize($data);
//var_dump($test);
?>