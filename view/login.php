<?php
include_once __DIR__ . "/../config.php";

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . APP . "model/session.php";
$session = new session();


$_SESSION['usuario'] = 'Roberto';

header('Location:home.php');

?>