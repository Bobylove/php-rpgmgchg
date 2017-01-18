<?php 
$usez = require('users.php');


foreach ($usez as $value) {

	echo "<tr><td>". $value->getId() ."</td><td>". $value->getEmail()."</td><td>" . $value->getDate() ."</td></tr>";
}


?>