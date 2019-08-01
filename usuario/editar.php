<?php 
require_once('../conexao/conexao.php');

$id = '';
$nome = '';
$apelido = '';
$email = '';
$username = '';
$password = '';
$estado = '';
$tipo = '';
$data='';

if ( isset($_GET["id"]) ) {
	$sql = "select * from usuario where id = " . $_GET['id'];
	$result = $conn->query($sql);
	$fila = $result->fetch_array();

	$id = $fila['id'];
	$nome = $fila['nome'];
	$apelido = $fila['apelido'];
	$email = $fila['email'];
	$username =$fila['username'];
	$password = $fila['password'];
	$estado =$fila['estado']; 
	$tipo = $fila['tipo'];
	$data=$fila['data'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>REGISTO</title>
	<link rel="stylesheet" type="text/css" href="../css/livro.css">
	<link rel="stylesheet" type="text/css" href="../css/ad2.css">
	<link rel="stylesheet" type="text/css" href="../js/validacao.js">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<ul>
  <li><a class="activa" href="#home">SAIR</a></li>
  <li><a href="#news">DEFINICOES</a></li>
  <li><a href="#contact">RELATORIO</a></li>
  <li><a href="#about">LIVROS</a></li>
  <li><a href="#about">CLIENTES</a></li>
   <li><a href="../usuario/registar.php">USUARIOS</a></li>
  <li><a class="sair" href="#home">INICIO</a></li>
</ul>

<div class="conteudo">


 <form class="formulario" action="procesa.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>" >
	<label>Nome</label>
	<input type="text" name="nome" required=""  value="<?php echo $nome; ?>"><br>
	<label>Apelido</label>
	<input type="text" name="apelido" required="" value="<?php echo $apelido; ?>"><br>
	<label>Email</label>
	<input type="text" name="email" required="" value="<?php echo $email; ?>"><br>
	<label>Username</label>
	<input type="text" name="username" required="" value="<?php echo $username; ?>"><br>
	<label>Password</label>
	<input type="password" name="senha" required="" >
	
	<label>Estado</label>
	<select name="estado" required="">
    <option value="activo">Activo</option>
    <option value="desactivo">Desactivo</option>
  	</select>

  	<label>Tipo</label>
	<select name="tipo">
    <option value="administrador" required="">Administrador</option>
    <option value="usuario">Usuario</option>
  	</select>				
		

	<input type="submit" value="Enviar" id="botao" name="botaoCadastrar" onclick="return  validaCadastro();"> 




<!-- <div id="fundo">
  
  <img src="../img/fundo.jpg" >
</div> -->

</div>


 
</body>
</html>
<?php $conn->close(); ?>