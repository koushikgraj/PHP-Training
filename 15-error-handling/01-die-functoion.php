<?php
 //Die function will stop the execution of PHP script.
 //This is helpful to debug the code
 //echo $undefined_variable;
   if(!file_exists("02-exception-handling-number.php")) {
      die("File not found");
   }else {
      $file = fopen("02-exception-handling-number.php","r");
      print "Opend file sucessfully";
   }
   // Test of the code here.
   
   //echo "we are here";
   
   $var = explode(',', 'abc,xyz');
   print_r($var);
?>