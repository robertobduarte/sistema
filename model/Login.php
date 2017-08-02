<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/Conex.php";

class Login{

	private $conex;

	public function __construct(){

		$this->conex = Conex::doConnect();
	}

	public function isLogado( $usuario ){

		echo 'logado como: ' . $usuario;
	}
}

?>