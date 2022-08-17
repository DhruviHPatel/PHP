3.Write a program to find largest among three numbers using
ternary operator.

<?php 

	$a = 5; 
	$b = 10; 
	$c = 15; 
  
	$max = ($a > $b) ? ($a > $c ? $a : $c) :  ($b > $c ? $b : $c); 
  
  	echo "Largest number is : $max"; 
?> 
