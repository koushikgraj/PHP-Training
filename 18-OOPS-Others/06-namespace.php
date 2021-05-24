<?php
// app.php
use Tutsplus\Code as TC;
use Tutsplus\Code\Tutorial as Tutorial;

use Koushik as K;
 
require "mylib.php";
require "kouLib.php";
 
// instantiate the Tutorial class with namespace alias TC
$objTutorial = new TC\Tutorial();
 
// instantiate the Tutorial class with class alias Tutorial
$objTutorial = new Tutorial();
 
// call the function
echo "<br>".TC\fooBar();
 
// display the constant
echo "<br>".TC\RECORDS_PER_PAGE;


$kouObj = new K\Tutorial();

echo "<br>".K\fooBar();

echo "<br>".K\RECORDS_PER_PAGE;

?>