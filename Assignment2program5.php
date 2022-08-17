<?php
	$arr= array(11=>'surat',12=>'baroda',13=>'ahmedabad',14=>'bharuch',15=>'nadiad');
	
	echo "1.Sorting Array by values without changing keys :"."<br><br>";
	echo "Ascending Order :"."<br><br>";
	sort($arr);
	foreach ($arr as $key => $value) {
		echo $key." = ".$value."<br>";
	}
	echo "<br>"."Descending Order"."<br><br>";
	rsort($arr);
	foreach ($arr as $key => $value) {
		echo $key." = ".$value."<br>";
	}
		echo "<br><br>";

	echo "2.Sorting Array by values with changing keys :"."<br><br>";
	echo "Ascending Order :"."<br><br>";


	asort($arr);
	foreach ($arr as $key => $value) {
		echo $key." = ".$value."<br>";
	}

	echo "<br>"."Descending Order"."<br><br>";

	arsort($arr);
	foreach ($arr as $key => $value) {
		echo $key." = ".$value."<br>";
	}
	
	$arr1=array('a'=>1,'b'=>3,'c'=>4,'d'=>2,'e'=>5);

		function odd_find($a1)
		{
				if($a1%2==1)
				{
					return $a1;
				}
		}

	echo "<br>"."3.Filter Odd Elements from array"."<br>";
	print_r(array_filter($arr1,'odd_find'));

	echo "<br><br>"."4.Sort the different arrays at a glance using single function."."<br>";

	//$arr2=array('f'=>6,'g'=>8,'h'=>9,'i'=>7,'j'=>10);
	$arr2=array('a'=>1,'e'=>5,'h'=>9,'i'=>7,'j'=>10);

		array_multisort($arr1,$arr2);
		print_r($arr1);
		echo "<br>";
		print_r($arr2);

	echo "<br><br>"."5.Merge the given arrays."."<br>";
	print_r(array_merge($arr1,$arr2));

	echo "<br><br>"."6.Find the intersection of two arrays."."<br>";
	print_r(array_intersect($arr1,$arr2));

	echo "<br><br>"."7.Find the union of two arrays."."<br>";
	$union=array_merge($arr1,$arr2);
	print_r(array_unique($union));

	echo "<br><br>"."8.Find set difference of two arrays."."<br>";
	print_r(array_diff($arr1,$arr2));

?>