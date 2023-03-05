<?php
require_once 'banco.php';
require_once 'tabelas.php';

$_POST['tipobanho'] = intval($_POST['tipobanho']);
$_POST['zapzap'] = intval($_POST['zapzap']);
// var_dump($_POST);
inserir_usuario();
header('location:info.php');



?>