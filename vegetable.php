<?php 
require_once 'Product.php';

class Vegetable extends Product {

	private $_productorName = "";
	private $_harvestedAt = "";

	public function __construct($id,$name,$prix,$harv){
		parent::__construct($id,$name,$prix,$harv);
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
		$oneDay = 1;
		if($_harvestedAt > $oneDay ){
			return false;

		}else{
			return true;
		}




	}
}

?>