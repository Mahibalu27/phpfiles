<?php
class Car {
 
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;
 
  public function hello() 
  {
	  echo $this -> color ;
    return "car";
	 echo "<br>";
	
  }
}
$bmw = new Car ();
$mercedes = new Car ();
    
echo $bmw -> hello();
echo $mercedes -> hello();
?>