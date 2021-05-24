<?php
abstract class Car {
  // Abstract classes can have properties
  protected $tankVolume;
  
  public $cost;
 
  // Abstract classes can have non abstract methods
  public function setTankVolume($volume)
  {
    $this -> tankVolume = $volume;
	echo "<br>Cost is ".$this->cost;
  }
 
  // Abstract method
  abstract public function calcNumMilesOnFullTank();
}


class Honda extends Car {
  // Since we inherited abstract method, we need to define it in the child class, 
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank()
  {
    $miles = $this -> tankVolume*30;
    return $miles;
  }
}


class Toyota extends Car {
  // Since we inherited abstract method, we need to define it in the child class, 
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank()
  {
    return $miles = $this -> tankVolume*33;
  }
 
  public function getColor()
  {
    return "blue";
  }
}

$toyota = new Toyota();
$toyota->cost = 100;
//$toyota->tankVolume = 12;
$toyota -> setTankVolume(10);
echo "Milage based on full tank in kms is ".$toyota -> calcNumMilesOnFullTank();//330
echo "<br>Color is ".$toyota -> getColor();//beige

$honda = new Honda();
$toyota->cost = 120;
$toyota -> setTankVolume(15);
echo "<br><br>Milage based on full tank in kms is ".$toyota -> calcNumMilesOnFullTank();//330

?>