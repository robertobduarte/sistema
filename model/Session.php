<?php

class Session{

	private $session_id;

	public function __construct() {

		$this->initSession();
		
	}


	private function initSession(){

		if ( !isset( $_SESSION ) ){
			session_start();			
		}

		$this->session_id = session_id();

	}

	public function getValue( $chave ){

		if ( isset( $_SESSION[$this->session_id][ $chave ] ) && !empty( $_SESSION[$this->session_id][ $chave ] ) ){

			return $_SESSION[$this->session_id][$chave];

		}else{ 

			return false;
		}		
	}


	public function setValue( $chave, $value ){

		$_SESSION[$this->session_id][$chave] = $value;
	
	}



}
?>