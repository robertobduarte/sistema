<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/IConex.php";

class Conex implements IConex{
             
    private static $db = IConex::DB;
    private static $host = IConex::DB_HOST;
    private static $banco = IConex::DB_NAME;
    private static $user = IConex::DB_USER;
    private static $pass = IConex::DB_PASS;
    private static $port = IConex::DB_PORT;
    private static $instance;
     
    public function doConnect(){
            if(empty(self::$instance)) {
                try {
					self::$instance = new PDO(self::$db.":host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$banco, self::$user, self::$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET Names UTF8'));
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); // ERRMODE_SILENT
                }
                catch(PDOException $e) {
                    echo 'Não foi possivel obter uma conexão com o banco de dados. '.$e->getMessage();
                }
            }
            return self::$instance;
    }
			
}


?>
