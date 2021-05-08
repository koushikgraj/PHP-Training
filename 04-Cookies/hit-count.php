<?php
   setcookie("name", "Raj Kumar", time()+3600, "/","", 0);
   setcookie('count', isset($_COOKIE['count']) ? $_COOKIE['count']+1 : 1, time()+3600, "/","", 0);
  ?>
<html>
 
<head>
  <title>Setting Cookies with PHP</title>
</head>

<body>
  <?php echo " welcome $_COOKIE[name] to Set Cookies";	
  		if(isset($_COOKIE['count'])){
  			echo "<br> visitor count is ". $_COOKIE['count'];

  		}

?>


</body>
