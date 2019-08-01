<?php 	
require_once('../conexao/conexao.php');

$sql = 'select * from livro';
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Aulas</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/livro.css">
</head>
<body>

	<!-- <ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="estudante/index.php">Estudante</a></li>
  <li><a href="#contact">Aula</a></li>
  <li><a href="#about">Presenca</a></li>
</ul> -->

<!-- <div style="padding:20px;margin-top:30px;background-color:#006666;height:1500px;"> -->
	
	<h1 style="text-align:center">Lista de Livros cadastrados</h1>
	<a href="editar.php">Novo</a>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nome</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Editora</th>
			<th>Edicao</th>
			<th>Data P</th>
			<th>Quantidade</th>
			<th>Preco</th>
			<th>Foto</th>
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
					echo '<td>' . $fila['titulo'] . '</td>';
					echo '<td>' . $fila['categoria'] . '</td>';
					echo '<td>' . $fila['editora'] . '</td>';
					echo '<td>' . $fila['edicao'] . '</td>';
					echo '<td>' . $fila['dataPublicacao'] . '</td>';
					echo '<td>' . $fila['quantidade'] . '</td>';
					echo '<td>' . $fila['preco'] . '</td>';
					echo '<td>' . $fila['foto'] . '</td>';
					echo '<td><a href="editar.php?id='. $fila['id'] . '">Modificar</a></td>'; 
					echo '<td><a href="eliminar.php?id='. $fila['id'] . '" onclick="return confirm(\'Tem certeza que pretende eliminar?\')">Eliminar</a></td>';
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