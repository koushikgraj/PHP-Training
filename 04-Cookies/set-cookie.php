<?php
   setcookie("name", "Raj", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
   setcookie("email", "ram@dev.com", time()+3600, "/", "",  0);
?>
<?php echo "Set Cookies"?><br>
<?php
if( isset($_COOKIE["name"]))
 echo 'User Name = ', $_COOKIE["name"]. "<br />";
if( isset($_COOKIE["age"])) 
 echo 'Age = ', $_COOKIE["age"] . "<br />";
 
if( isset($_COOKIE["email"])){
	echo "Welcome " . $_COOKIE["email"] . "<br />";
}
else{
	echo "Sorry... Email-ID is Not recognized" . "<br />";
}
?>
<html>
   
<head>
  <title>Setting Cookies with PHP</title>
</head>

<body>
  
</body>
   