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
			<?php include "views/userTable.php" ;?>
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

			$prod = require('views/productTable.php');

			?>
			<?php foreach ($prod as $key => $value) { ?>
			<tr><?php echo  (method_exists($value, 'getId')) ? "<td>". $value->getId() : null ;?>
				<?php echo  (method_exists($value, 'getName')) ? "<td>". $value->getName()  : null ;?>
				<?php echo  (method_exists($value, 'getPrix')) ? "<td>".  $value->getPrix()  : null ;?>
				<?php echo  (method_exists($value, 'getBrand')) ? "<td>". $value->getBrand()  : null ;?>
				<?php echo  (method_exists($value, 'getProductorName')) ? "<td>". $value->getProductorName() :null;?>
				<?php echo  (method_exists($value, 'getHarverstedAt')) ? "<td>". $value->getHarverstedAt()  : null;?></tr>
				<?php } ?>
			</table>
			<br>
			<br>
			<br>
			

		</body>
		</html>
