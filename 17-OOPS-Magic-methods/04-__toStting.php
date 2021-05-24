<?php
class Student {
    private $name;
    private $email;
	public $arr = array();
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
 
    public function __toString()
    {
        $this->arr = array(1,2,3,4);
		return 'abc';
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
echo $objStudent;

print_r($objStudent->arr);
//var_dump($objStudent);
?>