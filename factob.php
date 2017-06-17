//class trial obj.php
<?
class factorial
{
private $result = 1;
private $number;

//constructor
function _construct($number)
{
$this-> number = $number;
echo "factorial of $this->number";
}
function final()
{
for($i = 2;$i <= $this->number;$i++)
{
$this->result *= $i;
echo "is $this->result";
}?>
<?
include("factob.php")
$ob = new factorial(5);
$ob->final ();
}?>