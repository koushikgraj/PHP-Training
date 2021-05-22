<?php   
    echo "<h3>Example for __METHOD__</h3>";  
    class Koushik {    
        public function __construct() {    
            //print method::__construct    
                echo __METHOD__ . "<br><br>";   
            }    
        public function speaking(){    
            //print method::meth_fun    
                echo __METHOD__;   
        }    
    }    
    $a = new Koushik;    
    $a->speaking();  
?>  