<!DOCTYPE html>
<html>
<head>
	<title>
		Tables
	</title>
</head>
<body>
	<?php

	$names=["rutz","ran","POP"];

	?>
<table>
	<thead>
		<tr><td>no.</td>
		<td>Name</td>
		<td>City</td>
		</tr>
	</thead>
	<?php
		foreach ($names as $key => $name) {
			# code...
		

		echo '<tr>
		<td> ' . ($key+1) . ' </td>
		<td>' . ($name) . '</td>
		<td>Aurangabad</td>
		</tr>';
	}
	?>
	
</table>

</body>
</html>