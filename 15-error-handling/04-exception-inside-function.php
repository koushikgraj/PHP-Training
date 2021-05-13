<?php
/*
Following example has two try blocks. 
One of them has only finally block. 
Its try block calls div function which throws an exception.
*/
function div($x, $y){
   try{
      if (!$y) {
         throw new Exception('Division by zero.');
      }
      return $x/$y;
   }
   catch (Exception $e) {
      echo 'Caught exception: ', $e->getMessage(), "\n";
   }
}
try {
   echo div(10,0) . "\n";
}
finally{
   echo "This block is always executed\n";
}
// Continue execution
echo "Execution continues\n";
?>