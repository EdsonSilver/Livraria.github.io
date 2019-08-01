'<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$bdados = 'db_livraria';

// Crear uma instacia  msqli
$conn = new mysqli($host, $user, $pass, $bdados);

if ($conn->connect_errno > 0){
	die('Erro de Conexao [' . $conn->connect_error.']');
}
?>