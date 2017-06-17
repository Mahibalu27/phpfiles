<?php
//factorial.php
class Factorial
{
public $result = 1;
public $number;
function showresult($number)
{
$this->number = $number;
for($i = 2; $i <= $number; $i++)
{
$this -> result*=$i;
echo $this->result;
echo "<br>";
}
}
}
$fact = new Factorial();
$fact->showResult(5);
?>