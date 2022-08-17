6. Write a program that will accept an array of integers as input,
and output an array where for each item in the source array, the
new array will perform the following operations:
For even numbers divide by 2
For odd numbers multiply by 3


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

Output :
Source Array
1 2 3 4 5
New Array
3 1 9 2 15