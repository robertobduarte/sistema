<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/conex.php";

class login{

	public function __construct(){}

	public function isLogado( $usuario ){

		echo 'logado como :' . $usuario;
	}
}

?>