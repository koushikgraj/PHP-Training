<?php
/* First method to create array. */
$fruits = array("Orange", "Apple", "Banana");
//echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";

rsort($fruits);
print_r($fruits);
exit;
/* Second method to create array. */
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach( $numbers as $key=>$value ) {
   echo 'Key index of '. $key .' Value is '.$value .'<br />';
}

?>