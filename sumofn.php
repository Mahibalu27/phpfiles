<?php
//sum of N Number
class sumofn
{
	public $n;
	public $sum;
	public function sum($n)
	{
		$this->n = $n;
		$this->sum = ($n*($n+1))/2;
		echo $this->sum ;
}}
$obs = new sumofn();
$obs->sum(21);
?>