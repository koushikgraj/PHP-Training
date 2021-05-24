<?php
class Student {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
		echo "Student Name = ".$this->name;
		echo "<br>Student Email = ".$this->email;
    }
 
    public function __invoke()
    {
        echo '<br>Student object is called as a function!';
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
$objStudent();
?>