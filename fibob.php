
<?php
//fibonacci series
class Fibonacci
{
	public $f = 1;
	public $s;
	public $n;
	//function
	public function first($s)
	{
		for($i=1; $i<=10; $i++)
		{
		$this->s = $s;
		$this->n = $this->f+$s;
		$this->f = $s;
		$s = $this->n;
		echo $this->n;
		echo "<br>";
		}
	}
}
$obf = new Fibonacci();
$obf->first(1);
?>