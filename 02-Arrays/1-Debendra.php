<?php
/* First method to create array. 
Create an array which contains 'white', 'green', 'red', 'blue', 'black‘. And display the array values in descending order
*/
$color = array("white", "green", "red", "blue", "black");
//echo "descending order " . $color[4] . ", " . $color[3] . "," . $color[2] . "," . $color[1] . "," . $color[0];
print_r(array_reverse($color));
//rsort($color);
print_r($color);

echo "<pre>";
print_r($arr);
echo "</pre>";
?>
