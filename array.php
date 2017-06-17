<?php
//associative array declaration
$users = new ArrayObject(array("hasin"=>"hasin@pageflakes.com",
"afif"=>"mayflower@phpxperts.net",
"ayesha"=>"florence@pageflakes.net"));
//array to object
$iterator = $users->getIterator();
while ($iterator->valid())
{
echo "{$iterator->key()}'s Email address is{$iterator->current()}\n";
echo "<br>";
$iterator->next();
}
?>