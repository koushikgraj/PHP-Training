<?php
class Student {
    private $data = array();
 
    public function __isset($name) 
    {
		echo "calling isset -- ".$name;
        return isset($this->data[$name]);
    }
	
	public function __unset($name) 
    {
		echo "<br>calling unset -- ".$name;
        return isset($this->data[$name]);
    }
}
 
$objStudent = new Student();
echo isset($objStudent->phone);
unset($objStudent->phone);
?>