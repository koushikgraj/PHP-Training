<?php
 $dbhost = 'localhost:3306';
 $dbuser = 'root';
 $dbpass = '';
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

 if(! $conn ){
	die('Could not connect: ' . mysqli_error());
 }
 echo 'Connected successfully';
 mysqli_close($conn);
?>