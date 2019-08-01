<?php 	
require_once('../conexao/conexao.php');

$sql = 'select * from autor';
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Autores</title>
	
	<link rel="stylesheet" type="text/css" href="../css/autor.css">
</head>
<body>
	<h1 style="text-align: center;">Autores</h1>
	<a href="editar.php">Nova</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nome</th>
			<th>Apelido</th>
			<th>Nascimento</th>
			
			<th></th>
			<th></th>
		</tr>
		<?php 
			if ($result->num_rows > 0) {
				
				$conta = 0;
				while ($fila = $result->fetch_array()){
					echo "<tr>";
					echo '<td>' . ++$conta . '</td>';	
					echo '<td>' . $fila['nome'] . '</td>';
					echo '<td>' . $fila['apelido'] . '</td>';
					echo '<td>' . $fila['nascimento'] . '</td>';
					echo '<td><a href="editar.php?id='. $fila['id'] . '">Modificar</a></td>'; 
					echo '<td><a href="eliminar.php?id='. $fila['id'] . '" onclick="return confirm(\'Esta seguro\')">Eliminar</a></td>';
					echo "</tr>";
				}
				
			}
			else{
				echo '<p> Nao existem registros!</p>';
			}
		?>
	</table>
	
</body>
</html>

<?php 
$conn->close();
?>