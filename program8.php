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


