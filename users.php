<?php 
require "user.php";
$client1 = new User("mail1@mail.fr",1,date("F j, Y, g:i a"));
$client2 = new User("mail2@mail.fr",2,date("F j, Y, g:i a"));

return[$client1,$client2];


?>