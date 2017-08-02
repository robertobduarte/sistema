<?php
include_once __DIR__ . "/../config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/login.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/session.php";
$session = new session();
$login = new login();

$login->isLogado( $session->getValue('usuario') );

//echo 'Logado: ' . $_SESSION['logado'] . 'z<br>';
?>