<?php 
require_once('../conexao/conexao.php');
require_once('editar.php');


		$nome = $_POST['nome'];
		$apelido = $_POST['apelido'];
		$email = $_POST['email'];
		$username =$_POST['username'];
		$senha = $_POST['senha'];
		$estado =$_POST['estado']; 
		$tipo = $_POST['tipo'];
		$data=$_POST['data'];

if (!$_POST['id']){
	$sql = "insert usuario (nome,apelido,email,username,senha,estado,tipo,data) values ('$nome','$apelido','$email','$username','$senha', '$estado', '$tipo', '$data')";
}
else {
	$sql = "update usuario set nome = '$nome', apelido = '$apelido', email='$email', username='$username', senha = '$senha', estado = '$estado', tipo = '$tipo', data = '$data' where id = " .$_POST['id'];
}

$result = $conn->query($sql);

if (!$result) die('Erro ao inserir dados!');

$conn->close();

header('Location: index.php');

?>