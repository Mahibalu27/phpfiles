<?php
// palindrome
class pal
{
public $x;
public $r = 0;
public function calc($x)
{
$this->x = $x;
while ($x != 0)
	{
		$this->r = $this->r * 10 + $x % 10;
		$x = $x/10;
		echo $this->r;
	}
if($this->r==$x)
{
		echo $this->r,"yes it is a palindrome";
}
else
{
		echo "ooo";
}}}
$obj = new pal();
$obj->calc(121);
?>
		
		
	
		