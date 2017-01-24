<?php 
;


class Clients extends User {

	private $billAmount;
	private $cart ;
	private $prix ;

	public function __construct($cartAdd,$prix) {
		$this->setCart($cartAdd);
		$this->buy($prix);
		
	}

	public function buy($prix){
		$this->prix = $prix;
	}
	public function getBuy(){
		return $this->prix;
	}

	public function getBillAmount(){

		return $this->billAmount;
	}

	public function setBillAmount($bill){

		$this->billAmount = $this->billAmount+$bill->getBuy();
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