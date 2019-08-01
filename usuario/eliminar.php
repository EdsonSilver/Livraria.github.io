<?php 
require_once('../conexao/conexao.php');

if ($_GET['id']){
	$sql = "delete from usuario where id = " .$_GET['id'];
}

$result = $conn->query($sql);

if (!$result) die('Erro na eliminacao de dados');

header('Location: index.php');
?>