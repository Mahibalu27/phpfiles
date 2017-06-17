//odd or even
<?
class oddoreven
{
public $n;
public function odd($n)
{
	$this->n =$n;
if ($n%2 == 0)
{
	echo "oooo it is even";
}else if($n%2 == 1)
{
	echo "oooo if it is odd";
}
}
?>
<? include("")
$obe = new oddoreven();
$obe->odd(5);
?>