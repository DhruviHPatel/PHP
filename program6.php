<?php
	$num[0]=1;
	$num[1]=2;
	$num[2]=3;
	$num[3]=4;
	$num[4]=5;

	//print_r($num);
	echo "Source Array"."<br>";
	foreach($num as $n)
	{
		echo $n." ";
	}
	echo "<br>"."New Array"."<br>";

	foreach ($num as $n1) {
	 	if($n1%2==0)
	 	{
	 		$n1=$n1/2;
	 	}
	 	else
	 	{
	 		$n1=$n1*3;
	 	}
	 	echo "$n1"." ";
	 } 
?>
