<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tab</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
</head>
<body>
	<h1>
		<table class="ui table">
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>Date</th>
			</tr>
			<?php include "../views/userTable.php"; ?>
		</table></h1>
		<br>
		<br>
		<br>

		<table class="ui table">
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prix</th>
				<th>Marque</th>
				<th>Producteur</th>
				<th>Recolte</th>
			</tr>

			<?php

			$prod = require('../views/productTable.php');

			?>
			<?php foreach ($prod as $key => $value) { ?>
				<tr>
					<td><?php echo  (method_exists($value, 'getId')) ? $value->getId() : null ;?></td>
					<td><?php echo  (method_exists($value, 'getName')) ? $value->getName() : null ;?></td>
					<td><?php echo  (method_exists($value, 'getPrix')) ? $value->getPrix() : null ;?></td>
					<td><?php echo  (method_exists($value, 'getBrand')) ? $value->getBrand() : null ;?></td>
					<td><?php echo  (method_exists($value, 'getProductorName')) ? $value->getProductorName() :null;?></td>
					<td><?php echo  (method_exists($value, 'isFresh')) ? $value->isFresh() ." récolter il y a : " . $value->getHarverstedAt() . "  jours "  : null ?></td>
				</tr>
			<?php  } ?>
			</table>
			<br>
			<br>
			<br>
		</body>
		</html>

