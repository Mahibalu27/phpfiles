<?php
//interpolation search
class interpolation
{
	public $des = 5;
	public function pol()	
	{   $this->ele = array(1,2,3,4,5,6,7,8,9,10);
		$high = 9;
		$low = 0;
		//condition check
			if($low == $high)
			{
				echo "condition failed";
				exit(1);
			}
			//probing position
			$d = $high-$low;
			$c = $this->ele[$high]-$this->ele[$low];
			$s = $d/$c;
			$z = $this->des - $this->ele[$low];
			$mid = $low +($s*$z);
			//condition checking
			if($this->ele[$mid] == $this->des)
			{
				echo "Match found","<br>";
				echo "Index of the desired item: " .$mid;
				echo "<br>";
				echo "Value: " .$this->ele[$mid];
				echo "<br>";
			}
			else if($this->ele[$mid]<$this->des)
			{
			$mid = $mid+1;
			echo "mid+1 value".$mid;
			echo "<br>";
			}
			else if ($this->ele[$mid]>$this->des)
			{
				$mid = $mid-1;
				echo "mid - 1 value";
				echo "<br>";
			}
}}
$obj = new interpolation ;
$obj->pol();
?>
		