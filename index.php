<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tab</title>
</head>
<body>
	<h1>
		<table>
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>Date</th>
			</tr>
			<?php include "userTable.php" ;?>
		</table></h1>
		<br>
		<br>
		<br>

		<table>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prix</th>
			</tr>

			<?php

			$prod = require('productTable.php');

			foreach ($prod as $val) {
				echo "<tr><td>". $val->getId() ."</td><td>". $val->getName()."</td><td>" . $val->getPrix() ."</td></tr>";
			}
			?>
		</table>
		<br>
		<br>
		<br>

		<h2></h2>

	</body>
	</html>
