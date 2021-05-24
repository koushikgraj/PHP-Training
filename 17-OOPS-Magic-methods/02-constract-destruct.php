<?php
class Student {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
		echo "Setting variable in construct<br><br>";
    }
	
	function Call_this()
	{
		echo "<br>Calling this method<br><br>";
	}
 
    public function __destruct() 
    {
		unset($this->name);
		unset($this->email);
        echo 'This will be called when the script is shut down...';
        // save object state/other clean ups
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
$objStudent->Call_this();
?>