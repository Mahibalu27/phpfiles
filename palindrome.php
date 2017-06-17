//palindrome sequence
<?
class palindrome
{
	public $x;
	public $r = 0;
	public $c;
	public function palindromecheck($x)
	{
		$this->x = $x;
		$this->c = $x; 
		while($c != 0)
	{
		$this->r = $r*10;
		$this->r = $r+$c%10;
		$this->c = $c/10;
	}
	if($x == $r)
	{
	echo "palindrome";
	}
else if($x != $r)
{	
	echo "ooo no";
}}}
?>
	<?
	$obp = new palindrome(121);
	$obp->palindromecheck();
	?>
		
		
	
		