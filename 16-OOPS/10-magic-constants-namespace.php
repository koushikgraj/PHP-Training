<?php   
namespace KoushikTest;
    echo "<h3>Example for __NAMESPACE__</h3>";  
    class name {    
        public function __construct() {    
            echo 'This line will print on calling namespace.';     
        }     
    } 

class name2{
	
}	

class name3{
	
}
    $class_name = __NAMESPACE__ . '\name';   
	echo '<br>',__NAMESPACE__,'<br>';	
    $a = new $class_name;   
	
	$class_name2 = __NAMESPACE__ . '\name2';   
	$a = new $class_name2;   
?>  