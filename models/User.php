<?php 

class User {


	private $email = "";
	private $id = "";
	private $createdAt;

	public function __construct($emaill,$idi,$dat){

		$this->email = $emaill;
		$this->id = $idi;
		$this->createdAt = $dat;

	}

	public function setEmail(){

		return $this->email;

	}

	public function getEmail(){

		return $this->email;

	}

	public function setId(){

		return $this->id;

	}

	public function getId(){

		return $this->id;

	}
	public function getDate(){

		
		return $this->createdAt;

	}

}


// $test1 = $client1->getEmail("mailtest@fzf.cz") ." " . $client1->getId("1") ." " .$client1->getDate("Today");
// $test2 = $client2->getEmail("mdazdadaest@fzf.cz")." " . $client2->getId("2"). " " .$client2->getDate("bloublou");


?>