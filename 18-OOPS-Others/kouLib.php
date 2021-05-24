<?php
// mylib.php
namespace Koushik;
 
// define a class
class Tutorial {
   public function __construct() {
      echo "<br>Hi this class name : ".__CLASS__."\n";
      
   } 
}
 
// define a function
function fooBar() {
    echo "<br>Hi this function name: ".__FUNCTION__."\n";
}
 
// define a constant
const RECORDS_PER_PAGE = 10;
?>