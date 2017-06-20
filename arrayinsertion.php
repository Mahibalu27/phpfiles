<?php
//array insertion
class arrayinsertion
{
	public $ar;
	public $d;
	public $des = 44;//value to be inserted
    public $desk = 4;//index value
	public function fix()
	{
		$this->ar = array(1,2,3,34,5,6,99);
		$this->d = sizeof($this->ar);
		echo $this->d;
		$j = $this->d;
		echo $j;
		$j= $j+1;//size of array is incremented
		echo $j;
		while($j>$this->desk-1)
		{
		$this->ar[$j] = $this->ar[$j-1];
		$j = $j-1;
		}		
		$this->ar[$this->desk] = $this->des;
		for($i = 0;$i<=8;$i++)
				{
					echo $this->ar[$i],"<br>";	
				}
		echo "<br>";
		}
		
}
$obj = new arrayinsertion();
$obj->fix();

?>