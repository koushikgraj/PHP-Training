<?php
 //Die function will stop the execution of PHP script.
 //This is helpful to debug the code
   if(!file_exists("/tmp/test.txt")) {
      die("File not found");
   }else {
      $file = fopen("/tmp/test.txt","r");
      print "Opend file sucessfully";
   }
   // Test of the code here.
?>