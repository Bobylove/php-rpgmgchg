<?php 
require_once '../models/Product.php';


class Clients extends User {

	private $billAmount;
	private $cart;

	public function __construc() {
		
	}

	public function buy(){

	}

	public function getBillAmount(){
		return $this->billAmount;
	}

	public function setBillAmount($bill){
 		$this->billAmount = $bill;
	}

	public function getCart(){
		return $this->cart;
	}

	public function setCart($cartAdd){
		$this->cart = $cartAdd;	
	}
	public function addProductToCart($product){

	}

}

?>