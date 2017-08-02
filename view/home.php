<?php
include_once __DIR__ . "/../config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/Login.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/Session.php";
$session = new session();
$login = new login();

$login->isLogado( $session->getValue('usuario') );

?>