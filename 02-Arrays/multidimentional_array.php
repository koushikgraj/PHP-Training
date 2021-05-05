<?php
 $marks = array( 
	"hari" => array (
	   "physics" => 35,
	   "maths" => 30,	
	   "chemistry" => 39
	),
	
	"prasad" => array (
	   "physics" => 30,
	   "maths" => 32,
	   "chemistry" => 29
	),
	
	"lakshmi" => array (
	   "physics" => 31,
	   "maths" => 22,
	   "chemistry" => 39
	)
 );
 
 /* Accessing multi-dimensional array values */
 echo "Marks for Hari in physics : " ;
 echo $marks['hari']['physics'] . "<br />"; 
 
 echo "Marks for Prasad in maths : ";
 echo $marks['prasad']['maths'] . "<br />"; 
 
 echo "Marks for Lakshmi in chemistry : " ;
 echo $marks['lakshmi']['chemistry'] . "<br />"; 

?>