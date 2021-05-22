<?php
class Car {
  private $model = '';
  
  //__construct
  public function __construct($model = null)
  {
    if($model) 
    { 
      $this -> model = $model;
    }
	else
	{
		echo "model property is empty";
	}
  }
   
  public function getCarModel()
  {
    //We use the __CLASS__ magic constant in order to get the class name
	if($this -> model)
		return " The <b>" . __CLASS__ . "</b> model is: " . $this -> model;
	else
		return null;
  }
}
  
$car1 = new Car("Maruti Suzuki");
  
echo $car1 -> getCarModel();