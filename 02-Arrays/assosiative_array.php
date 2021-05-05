 <?php
/* First method to associate create array. */
 $salaries = array("ram" => 2000, "dev" => 1000, "shiv" => 500);
 
 echo "Salary of Ram is ". $salaries['ram'] . "<br />";
 echo "Salary of Dev is ".  $salaries['dev']. "<br />";
 echo "Salary of Shiv is ".  $salaries['shiv']. "<br />";
 
 /* Second method to create array. */
 $salaries['ram'] = "high";
 $salaries['dev'] = "medium";
 $salaries['shiv'] = "low";
 
 echo "Salary of Ram is ". $salaries['ram'] . "<br />";
 echo "Salary of Dev is ".  $salaries['dev']. "<br />";
 echo "Salary of Shiv is ".  $salaries['shiv']. "<br />";
?>