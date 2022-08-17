<!-- 8. Create an associative array using the states as keys, the cities
as values and transform it into 2-dimensional array and display
the data as a table.

<html>
<body>
	<table border="2">
		<tr>
			<th>State</th>
			<th>City</th>
		</tr>
		<tr>
			<?php
				$state_city=array("Gujarat"=>"Ahmedabad","Maharastra"=>"Mumbai","Kerala"=>"Thiruvananthapuram");
				foreach($state_city as $key=>$value)
				{
					echo ("<td>$key</td><td>$value</tr><br>");
				}
			?>
	</table>
</body>
</html>

Output :
State	City
Gujarat	Ahmedabad
Maharastra	Mumbai
Kerala	Thiruvananthapuram -->

