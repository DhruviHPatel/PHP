5.Create an array of three employee names. Create another
array that associates employee names with their salary values.
Print both arrays using foreach loop.

<?php
	$emp = array("Alice" => 10000,"Bob" => 20000,"Mark" => 30000);
	foreach($emp as $name=>$salary)
	{
		echo "$name = $salary"."<br>";
	}
?>

Output :
Alice = 10000
Bob = 20000
Mark = 30000