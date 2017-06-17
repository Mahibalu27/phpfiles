<?php
class pascal
{
public $n;
//pascaltriangle
public function pascaltriangle($n)	
{
$this->n = $n;
	for($i=1; $i<=$n; $i++)
	{
		for($j=1;$j<=$i;$j++){
			echo "#";
			
		}
echo "<br>";}}}
$obp = new pascal();
$obp->pascaltriangle(5);
?>