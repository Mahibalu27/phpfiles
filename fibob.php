//fibonacci series
<?
class fibonacci
{
	public f;
	public s;
	public n;
	function _construct()// constructor function
	{echo "fibonacci series"};
	public function first($f)
	{
		$this->f = $f;
	}
	public function fact($s)
	{
		$this->s = $s;
		$this->n = $f+$s;
		$this->f = $s;
		$this->s = $n;
	}
?>
<?
include ("")
$obf = new fibonacci(1);
$obf->fact(1);
?>