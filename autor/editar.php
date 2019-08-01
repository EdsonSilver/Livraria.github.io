<?php 
require_once('../conexao/conexao.php');

$id = '';
$nome = '';
$apelido = '';
$nascimento = '';


if ( isset($_GET["id"]) ) {
	$sql = "select * from autor where id = " . $_GET['id'];
	$result = $conn->query($sql);
	$fila = $result->fetch_array();

	$id = $fila['id'];
	$nome = $fila['nome'];
	$apelido = $fila['apelido'];
	$nascimento = $fila['nascimento'];
	
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Aula</title>

	<link rel="stylesheet" type="text/css" href="../css/ad2.css">
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





<h3><?php echo ($id>0) ? 'Modificar ':'Nova '; ?> registro</h3>
<form action="procesa.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>" >
	<label>nome</label>
	<input type="text" name="nome" value="<?php echo $nome; ?>"><br>
	label>Apelido</label>
	<input type="text" name="apelido" value="<?php echo $apelido; ?>"><br>
	label>Data de Nascimento</label>
	<input type="Date" name="nascimento" value="<?php echo $nascimento; ?>"><br>
	<input type="submit" value="Enviar">
	
</form>
</body>
</html>






<?php $conn->close(); ?>