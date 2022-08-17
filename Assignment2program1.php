<?php
	$str="This is a string,HEllo World";
	$v=0;

	// for($i=0;$i<strlen($str);$i++)
	// {
	// 	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U')
	// 	{
	// 		$v++;
	// 	}
	// }
	echo "<br>";
	$a=0;
	$e=0;
	$i=0;
	$o=0;
	$u=0;
	for($j=0;$j<strlen($str);$j++)
	{
		if($str[$j]=='a'||$str[$j]=='A')
		{
			$a++;
			$v++;
		}
		elseif($str[$j]=='e'||$str[$j]=='E')
		{
			$e++;
			$v++;
		}
		elseif($str[$j]=='i'||$str[$j]=='I')
		{
			$i++;
			$v++;
		}
		elseif($str[$j]=='o'||$str[$j]=='O')
		{
			$o++;
			$v++;
		}
		elseif($str[$j]=='u'||$str[$j]=='U')
		{
			$u++;
			$v++;
		}
	}

	echo "Total vovels in a string are : ".$v."<br><br>";

	echo "Total occurances of a : ".$a."<br>";
	echo "Total occurances of e : ".$e."<br>";
	echo "Total occurances of i : ".$i."<br>";
	echo "Total occurances of o : ".$o."<br>";
	echo "Total occurances of u : ".$u."<br><br>";

	$str1="madam";
	$str2='';
	$len = strlen($str1);
	for($k=$len-1;$k>=0;$k--)
	{
	 	$str2.=$str1[$k];
	}	
	//echo $str2;

	if($str1==$str2)
	{
		echo "String is Palindrome";
	}
	else
	{
		echo "String is not Palindrome";
	}
?>
