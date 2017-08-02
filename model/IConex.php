<?php

interface IConex{

	const DB = "mysql";
	const DB_NAME = "sistema";
	const DB_HOST = "127.0.0.1";
	const DB_USER = "root";
	const DB_PASS = "";
	const DB_PORT = "3306";

	public function doConnect();
	
}

?>
