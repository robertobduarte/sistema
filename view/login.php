<?php
include_once __DIR__ . "/../config.php";

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/Conex.php";
require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/Session.php";
$session = new session();

$session->setValue( 'usuario', 'Roberto' );

header('Location:home.php');

?>