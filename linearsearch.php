<?php
//linear search
class linearsearch
{
	public $ele;
	public function dec()
	{
		$this->ele = array(1,2,3,4,5,6,7,8,9);
		for($i = 0;$i <=8; $i++)
		{
			if ($i>8)
			{
		    echo "error";
			exit(1);
			}
			if($this->ele[$i]==3)
  			{   echo "MATCH FOUND";
		        echo "<br>";
				print_r($this->ele[$i]);	
                echo "<br>";
                echo "Index value = ".$i;				
				exit(1);			
			}
			echo "I MOVE ON TO THE NEXT","<br>";
		}
		
}}
	$obj = new linearsearch;
	$obj->dec();
	?>
	