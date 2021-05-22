<?php   
    echo "<h3>Example for __LINE__</h3>";    
    // print Your current line number i.e;4     
    echo "You are at line number " . __LINE__ . "<br><br>";  
	
	 echo "<h3>Example for __FILE__</h3>";    
    //print full path of file with .php extension    
    echo __FILE__ . "<br><br>";  
	
	 echo "<h3>Example for __DIR__</h3>";    
    //print full path of directory where script will be placed    
    echo __DIR__ . "<br><br>";  
    //below output will equivalent to above one.  
    echo dirname(__FILE__) . "<br><br>";    
?>  