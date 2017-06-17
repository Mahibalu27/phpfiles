//armstrong number
<?
class armstrong
{
public $count = 0 ;
public $x;
public $c;
public $r;
public $tot = 0;
public function armstrongcheck($x)
{
	$this->x = $x;
	$this->c = $c;
	$this->c = $x;
	while ($c != 0)
	{
		$c = $c/10;
		$count++;
echo $count;
}
}
public function total()
{
$this->r = $c%10;
$this->tot = $tot+power($r,$count);
$this->c = $c/10;
}
if($tot == $x)
{
echo "armstrong number";}
	else{
		echo "nooooooo" 
	}
}
?>
<?
$oba = new armstrong();
$oba->armstrongcheck(371);
$obs->total();
?>