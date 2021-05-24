<?php
// mylib.php
namespace Tutsplus\Code;
 
// define a class
class Tutorial {
   public function __construct() {
      echo "<br>Fully qualified class name: ".__CLASS__."\n";
      
   } 
}
 
// define a function
function fooBar() {
    echo "<br>Fully qualified function name: ".__FUNCTION__."\n";
}
 
// define a constant
const RECORDS_PER_PAGE = 50;
?>