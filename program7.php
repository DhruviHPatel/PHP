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
