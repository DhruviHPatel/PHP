7. Write PHP code to declare an associative array of six elements
that has supermarket item names associated with their price.
Print the array using foreach loop followed by the total cost of
items.


<?php
	$arr['milk']=80;
	$arr['flour']=300;
	$arr['salt']=100;
	$arr['rice']=100;
	$arr['pasta']=50;
	$arr['oil']=200;

	$sum =0 ;

	foreach($arr as $items)
	{
		$sum=$sum+$items;
	}
	echo "Total amount of products is : $sum";
?>

Output :
Total amount of products is : 830