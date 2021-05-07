<?php
 echo 'User Name = ', $_COOKIE["name"]. "<br />";
 
 echo 'Age = ', $_COOKIE["age"] . "<br />";
 
if( isset($_COOKIE["email"])){
	echo "Welcome " . $_COOKIE["email"] . "<br />";
}
else{
	echo "Sorry... Email-ID is Not recognized" . "<br />";
}
?>