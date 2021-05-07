<?php
   setcookie("name", "Raj Kumar", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
   setcookie("email", "ram@dev.com", time()+3600, "/", "",  0);
?>
<html>
   
<head>
  <title>Setting Cookies with PHP</title>
</head>

<body>
  <?php echo "Set Cookies"?>
</body>
   