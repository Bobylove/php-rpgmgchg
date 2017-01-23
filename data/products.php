<?php 
require_once 'models/Product.php';
require 'models/Cloth.php';
require 'models/Vegetable.php';


$leg1 = new Vegetable("1","Pomme","0,32€","Toi","3","");
$leg2 = new Vegetable("2","Cerise","4,32€","Moi","33","");
$vet1 = new Cloth("3","Chemise","45€","bloublouMania","");
$vet2 = new Cloth("4","Veste","145€","Nycom","","");
$vet3 = new Cloth("5","Robe","20€","zoliFringue","","");

?>