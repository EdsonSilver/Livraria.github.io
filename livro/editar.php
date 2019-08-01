<?php 
require_once('../conexao/conexao.php');


      



$id = '';
$nome = '';
$titulo = '';
$categoria = '';
$editora='';
$edicao='';
$dataPublicacao='';
$quantidade='';
$preco='';
$foto='';


if ( isset($_GET["id"]) ) {
	$sql = "select * from livro where id = " . $_GET['id'];
	$result = $conn->query($sql);
	$fila = $result->fetch_array();

	$id = $fila['id'];
	$nome = $fila['nome'];
	$titulo = $fila['titulo'];
	$categoria = $fila['categoria'];
	$editora=$fila['editora'];
	$edicao=['edicao'];
	$dataPublicacao=['dataPublicacao'];
	$quantidade=['quantidade'];
	$preco=['preco'];
	$foto=['foto'];

	 // $sql = "select * from turma where id = " . $_GET['id'];
	
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Aula</title>
	<link rel="stylesheet" type="text/css" href="../css/livro.css">
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

<!-- <div class="conteudo"> -->


<form action="procesa.php" method="post" class="formulario">
	<input type="hidden" name="id" value="<?php echo $id; ?>" >

	<select class="form-control" name="nome">
  <option style="text-align: center;">Autor</option>
    <?php 

       $result = "SELECT nome FROM autor";
       $resultado = mysqli_query($conn, $result);

       while($row = mysqli_fetch_assoc($resultado)) {
         echo '<option value="'.$row['nome'].'"> '.$row['nome'].' </option>';
       }
    ?>
</select>


	<input type="text" name="titulo" placeholder="Titulo" value="<?php echo $titulo; ?>">
	

	<select name="categoria" required="">
	<option>seleccione </option>	
    <option value="romance">Romance</option>
    <option value="contos">Contos</option>
    <option value="novela">Novela</option>
    <option value="infantil">Infantil</option>
    <option value="didactico">Didactico</option>
  	</select><br>

	
	<input type="text" name="editora" placeholder="Editora" value="<?php echo $editora; ?>">

	
	<input type="text" name="edicao" placeholder="Edicao" value="<?php echo $edicao; ?>">

	
	<input type="Date" name="dataPublicacao" value="<?php echo $dataPublicacao; ?>"><br>

	<input type="text" name="quantidade" placeholder="Quantidade" value="<?php echo $quantidade; ?>">

	
	<input type="text" name="preco" placeholder="Preco" value="<?php echo $preco; ?>">

	<input type="text" name="foto" value="<?php echo $foto; ?>"><br>


		<!-- Combobox -->
<!-- <select class="form-control" name="turma">
  <option></option>
    <?php 

       $result = "SELECT turma FROM turma";
       $resultado = mysqli_query($conn, $result);

       while($row = mysqli_fetch_assoc($resultado)) {
         echo '<option value="'.$row['turma'].'"> '.$row['turma'].' </option>';
       }
    ?>
</select> -->

	<input type="submit" value="Gravar">
</form>




<!-- <div id="fundo">
  
  <img src="../img/fundo.jpg" >
</div> -->

<!-- </div>
 -->





</body>
</html>
<?php $conn->close(); ?>