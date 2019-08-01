<?php 
require_once('../conexao/conexao.php');

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$nascimento = $_POST['nascimento'];

if (!$_POST['id']){
	$sql = "insert autor (nome,apelido,nascimento) values ('$nome','$apelido','$nascimento')";
}
else {
	$sql = "update autor set nome = '$nome', apelido='$apelido', nascimento='$nascimento' where id = " .$_POST['id'];
}

$result = $conn->query($sql);

if (!$result) die('Erro ao inserir dados');

$conn->close();

header('Location: index.php');

?>