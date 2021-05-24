<?php
class Student {
    public function __call($methodName, $arguments) 
    {
        // $methodName = getStudentDetails
        // $arguments = array('1')
		
		echo "<br><br>Trying to call undefined method ".$methodName;
		print_r($arguments);
		
    }
	
	/*function abcd()
	{
		
	}*/
	
	function getStudentDetails($a,$b,$c){}
	
	function xyz123(){}
	
}
 
$objStudent = new Student();
$objStudent->getStudentDetails(1,"Hi","This is test");
$objStudent->abcd();
$objStudent->xyz123();
?>