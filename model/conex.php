<?php
include __DIR__ . '/../config.php';

class conex {
        
    protected static $instance;
     
    protected function __construct() {}
     
    public static function getInstance() {
            if(empty(self::$instance)) {
                try {
					self::$instance = new PDO(DB.":host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET Names UTF8'));
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT); // ERRMODE_SILENT
                }
                catch(PDOException $e) {
                    echo 'Não foi possivel obter uma conexão com o banco de dados. '.$e->getMessage();
                }
            }
            return self::$instance;
    }
			
}

?>