<?php 	
require_once('../conexao/conexao.php');


$sql = 'select * from usuario';
$result = $conn->query($sql);

?>




<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista usuarios</title>
	<link rel="stylesheet" type="text/css" href="usuario.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Lista de Usuarios</h1>
	<a href="editar.php">Nuevo</a>
	<table border="1">
		<tr>
			<th>Nr.</th>
			<th>Nome</th>
			<th>Apelido</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Estado</th>
			<th>Tipo</th>
			<th>Data</th>
			<th>Accao</th>
		</tr>
		<?php 
			if ($result->num_rows > 0) {
				
				$conta = 0;
				while ($fila = $result->fetch_array()){
					echo "<tr>";
					echo '<td>' . ++$conta . '</td>';	
					echo '<td>' . $fila['nome'] . '</td>';
					echo '<td>' . $fila['apelido'] . '</td>';
					echo '<td>' . $fila['email'] . '</td>';
					echo '<td>' . $fila['username'] . '</td>';
					echo '<td>' . $fila['senha'] . '</td>';
					echo '<td>' . $fila['estado'] . '</td>';
					echo '<td>' . $fila['tipo'] . '</td>';
					echo '<td>' . $fila['data'] . '</td>';
					echo '<td><a href="editar.php?id='. $fila['id'] . '">Editar</a></td>'; 
					echo '<td><a href="eliminar.php?id='. $fila['id'] . '" onclick="return confirm(\'Deseja realmente eliminar?\')">Eliminar</a></td>';
					echo "</tr>";
				}
				
			}
			else{
				echo '<p> Nao existem registros</p>';
			}
		?>
	</table>
	
</body>
</html>

<?php 
$conn->close();
?>