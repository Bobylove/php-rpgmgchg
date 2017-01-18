<?php 
require_once 'Product.php';

class Vegetable extends Product {

	private $_productorName = "";
	private $_harvestedAt = 0;

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