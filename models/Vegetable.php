<?php 
require_once '../models/Product.php';

class Vegetable extends Product {

	private $_productorName = "";
	private $_harvestedAt = 0;

	public function __construct($id,$name,$prix,$productor,$harv){
		
		parent::__construct($id,$name,$prix);
		$this->setProductorName($productor);
		$this->setHarverstedAt($harv);

	}

	public function getProductorName(){

		return $this->_productorName;
	}

	public function getHarverstedAt(){

		return $this->_harvestedAt;
	}

	public function setHarverstedAt($harv){

		$this->_harvestedAt = $harv ;

	}
	public function setProductorName($productor){

		$this->_productorName = $productor ;
	}

	public function isFresh(){

		$oneDay = 3;

		if($this->_harvestedAt >= $oneDay ){

			return "Produit pas frais ";

		}else{

			return "Produit frais ";

		}




	}
}

?>