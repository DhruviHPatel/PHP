<?php
	$str1="hello world!!! hello world";
	$str2="world";

	echo "First Occurance is at position : ";
	echo strpos($str1,$str2);
	echo "<br>";

	echo "Last Occurance is at position : ";
	echo strrpos($str1,$str2);
	echo "<br>";

	$s = substr_count($str1,$str2);
	echo "Total occurances of small string in large string : $s";
	echo "<br>";

	$str = "people";
	$str4=str_replace($str2,$str,$str1);
	echo "After replacing the small string in the large string : ".$str4;

?>