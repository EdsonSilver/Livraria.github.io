<?php 
require_once('../conexao/conexao.php');

if ($_GET['id']){
	$sql = "delete from livro where id = " .$_GET['id'];
}

$result = $conn->query($sql);

if (!$result) die('Erro ao eliminar dados!');

header('Location: index.php');
?>