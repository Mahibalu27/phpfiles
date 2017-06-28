<?php
//insertion sort
   $test = array(3,4,7,2,1,4,6);
   $d = count($test);
   echo implode(',',$test);
   echo "<br>";
   
	 for($i=1;$i<$d-1;$i++)
    {
    //temporary assigning
	$value = $test[$i];
    //
	$h = $i;
	while($h>0 && $test[$h-1]>$value)
	{
		$test[$h] = $test[$h-1];
		$h = $h-1;
	}
	$test[$h] = $value;
	
	}echo implode(',',$test);
	
 ?>