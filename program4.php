4.Use control statements to check the season of the year given
the month as a number.
Spring months-> 3, 4, 5
Summer months->6, 7, 8
Autumn months->9, 10, 11
Winter months->12, 1, 2

<?php
	$mon=5;

	switch($mon)
	{
		case 1:
		case 2:
		case 12:
				echo "Winter";
				break;
		case 3:
		case 4:
		case 5:
				echo "Spring";
				break;
		case 6:
		case 7:
		case 8:
				echo "Summer";
				break;
		case 9:
		case 10:
		case 11:
				echo "Autumn";
				break;
		default : echo "Wrong Month";
		break;
	}
?>

Output :
Spring

