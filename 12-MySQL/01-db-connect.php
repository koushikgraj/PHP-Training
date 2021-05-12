<?php
   $mysqli = mysqli_connect("localhost", "root", "", "php_training");

   $result = mysqli_query($mysqli, "SELECT 'Welcome to MySQLi' AS _msg FROM DUAL");
   $row = mysqli_fetch_assoc($result);
   echo $row['_msg'];
?>