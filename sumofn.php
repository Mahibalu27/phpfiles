//sum of N Number
<?
class sumofn
{
	public $n;
	public $sum;
	public function sum($n)
	{
		$this->n = $n;
		$sum = ($n*($n+1))/2;
		echo "total sum" $sum ;
}}
?>
<?
$obs = new sumofn();
$obs->sum(6);
?>