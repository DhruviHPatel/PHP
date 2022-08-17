<?php
	$arr=array(1=>'dhruvi',2=>'dhwani',3=>'mittal',4=>'arina',5=>'prapti');

	echo "Elements of an array along with key"."<br>";
	foreach ($arr as $key => $value) {
		echo $key."=".$value."<br>";
	}
	echo "<br>";

	$size = sizeof($arr);
	echo "Size of array : ".$size;
	echo "<br><br>";

	echo "After Deleting array element "."<br>";
	unset($arr[5]);
	foreach ($arr as $key => $value) {
		echo $key."=".$value."<br>";		
	}
	//print_r($arr);
	echo "<br>";

	echo "After reversing the order of each element’s key-value pair"."<br>";
	$flip=array_flip($arr);
	foreach ($flip as $key => $value) {
		echo $key."=".$value."<br>";
	}
	//print_r($flip);

	echo "After traverse the elements in an array in random order"."<br>";
	shuffle($arr);
	print_r($arr);

?>