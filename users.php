<?php 
require "user.php";
$client1 = new User("mail1@mail.fr",1,"today");
$client2 = new User("mail2@mail.fr",2,"today");

return[$client1,$client2];


?>