<?php
	$str1="hello";
	$str2="world";
	echo "After Comparing two stings with == operator"."<br>";
	if($str1==$str2)
	{
		echo "Strings are Equal";
	}
	else
	{
		echo "Strings are not Equal";
	}

	echo "<br>"."After Comparing two stings with strcmp()"."<br>";
	if(strcmp($str1,$str2)==0)
	{
		echo "Strings are equal";
	}
	else
	{
			echo "Strings are not Equal";
	
	}

	echo "<br>"."After appending second string to the first string : "."<br>";
	echo $str1.$str2;
?>