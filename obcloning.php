<?php
//object cloning
class obcloning
{
public $base;
public $p;
public $x;
public function p_get($p)
{
	$this->p=$p;
}
public function base_get($base)
{
	$this->base=$base;
}
public function calc()
{
	$this->x = pow($this->base,$this->p);
	echo $this->x,"hlooooo";
}
}
$obj = new obcloning();
$ob2 = clone $obj;
//function call using $ob2
$ob2->p_get(2);
$ob2->base_get(2);
$ob2->calc();
?>