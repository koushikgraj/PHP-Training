<?php
interface Car { 
  public function setModel($name);
  
  public function getModel();
  
  public function start();
}

interface Vehicle {
  public function setHasWheels($bool); 
 
  public function getHasWheels();
}

class miniCar implements Car, Vehicle {
  private $model; 
  private $hasWheels; 
  
  public function setModel($name)
  { 
    $this -> model = $name; 
  }
  
  public function getModel()
  {
    return $this -> model; 
  }
  
  public function setHasWheels($bool)
  { 
    $this -> hasWheels = $bool; 
  }
  
  public function getHasWheels()
  {
  return ($this -> hasWheels)? "has wheels" : "no wheels";
  }
  
  public function hi($name)
  {
	 return "Hi $name!"; 
  }
  
  public function start(){
	  return "your car started";
  }
}

$minicar = new miniCar();
echo $minicar->hi('Koushik');
echo "<br>".$minicar->start();
$minicar->setModel("Mahindra Jeep");
$minicar->setHasWheels(true);

echo "<br>Your car model name is ".$minicar->getModel();
echo "<br>".$minicar->getHasWheels();
