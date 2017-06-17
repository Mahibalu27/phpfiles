<?php
//palindrome check
class palindrome
{
	public $r = 0;
	public $x = 121;
	public $c;
	//function name
	public function success()
	{
		$this->c = $this->x;
while($this->x != 0)
	{
		$this->r = $this->r*10 + $this->x%10;
		$this->x = (int)$this->x/10;
	}
if($this->r == $this->c)//comparision
{
		echo "yes palindrome";
		echo $this->x ; 
		echo "<br>";
		echo $this->c ;
}
else
{
		echo "ooo";
}
}
}
$object = new palindrome();
$object->success();
?>
		
		
	
		