<?php
//binary search
class binarysearch
{
	public $sortedarr;
	public $des;
	public $d;
	public $mid;
	public $l;
	public $h;
	public function search()
	{
		$this->sortedarr = array(10,12,25,36,45,67,78);//sorted array
		//size of array
		$this->d = sizeof($this->sortedarr);
	    echo $this->d,"<br>";
	} 
public function set_arr(){
		$this->l = 0;
		$this->h = $this->d-1;
		echo $this->h,"<br>";
		$this->des = 36;
		$c = ($this->h-$this->l)/2;
		$this->mid = $this->l+$c;
	    echo "Mid value: ".$this->mid,"<br>";
	}
	public function calc()
	{
		while($this->sortedarr[$this->mid] == $this->des)
		{
			if($this->l>=$this->h)
			{
		 		echo "process failed"; exit(1);
		    }
			else if($this->des > $this->sortedarr[$this->mid])
			{
				$this->l = $this->mid+1;
			}
		    else if($this->des < $this->sortedarr[$this->mid])
			{
				$this->l = $this->mid-1;
			}
			else if($this->des == $this->sortedarr[$this->mid])
			{
				echo "Match found: " .$this->sortedarr[$this->mid],"<br>";
				echo "The index value is: ".$this->mid;
			    exit(1);
		    }
}}}	

$obj = new binarysearch;
$obj->search();
$obj->set_arr();
$obj->calc();
?>
		
		
		