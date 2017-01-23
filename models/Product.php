<?php 
class Product {

	private $_id = "";
	private $_name = "";
	private $_prix = "";

	public function __construct($id,$name,$prix){

		$this->setId($id);
		$this->setName($name);
		$this->setPrix($prix);

	}

	public function getId(){
		return $this->_id;
	}
	public function getName(){
		return $this->_name;
	}
	public function getPrix(){
		return $this->_prix;
	}
	public function setId($id){
		$this->_id = $id;
	}

	public function setName($name){
		$this->_name = $name;
	}

	public function setPrix($prix){
		$this->_prix = $prix;
	}


}




?>