<?php
/*function writeMsg() {
  echo "Welcome to PHP world!";
}

writeMsg(); // call the function
*/
?>

<?php 
error_reporting(E_ALL);
//declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b, bool $default_arg = true) {
  if($default_arg) {
	return $a + $b;
  }
  else {
	  echo $a + $b;
  }
}
addNumbers(5, 20, true); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown

?>
