<?php
require_once '../models/Product.php';


class Cloth extends Product {
	private $_brand = "";

	public function __construct($id,$name,$prix,$brand){
		parent::__construct($id,$name,$prix);
		$this->setBrand($brand);

	}

	public function getBrand(){
		return $this->_brand;
	}
	public function setBrand($brand){
		$this->_brand = $brand;
	}
	public function try(){
		return;
	}

}
?>
