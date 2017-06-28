<?php
class bubblesort
{
private $test;
private $d;
function __construct()
{
$this->test = array(2,5,32,6,74,6);
$this->d = count($this->test);
echo implode(',',$this->test),"<br>";
}
public function sort()
{
	$arr = $this->test;
for($k = 0;$k <= $this->d-1; $k++ )
{
for($i = 0;$i<=$this->d-2;$i++)
{
if($arr[$i]>$arr[$i+1])
{
//manual swaping
$tem = $arr[$i];
$arr[$i] = $arr[$i+1];
$arr[$i+1] = $tem;
}
}
}
echo implode(',',$arr)."\n";
}
}
$ob = new bubblesort();
$ob->sort();
?>

