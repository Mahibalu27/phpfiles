<?php
//method chaining
class trial
{
public $ar;
public $ra;
public function chain1()
{
$this->ra = 'excuse me';
echo $this->ra;
return $this;
}
public function chain2()
{
$this->ar = 'helloooooo';
echo $this->ar;
echo "<br>";
return $this;
}
}
$obj = new trial();
$obj->chain2()->chain1();
?>