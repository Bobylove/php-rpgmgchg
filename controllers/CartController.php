
<?php
require_once '../models/Client.php';
require_once '../models/User.php';

class CartController {
	
	public function home(){
		$cart = new Clients('pêche');
		$products = $cart->getCart();
		
		require __DIR__.'../views/home.php';
	}
}