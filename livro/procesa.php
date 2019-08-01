<?php 
require_once('../conexao/conexao.php');

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$editora = $_POST['editora'];
$edicao = $_POST['edicao'];
$dataPublicacao = $_POST['dataPublicacao'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$foto = $_POST['foto'];

if (!$_POST['id']){
	$sql = "insert livro (nome,titulo,categoria,editora,edicao,dataPublicacao,quantidade,preco,foto) values ('$nome','$titulo','$categoria','$editora','$edicao','$dataPublicacao','$quantidade','$preco','$foto')";
}
else {
	$sql = "update livro set nome = '$nome', titulo = '$titulo', categoria='$categoria', editora='$editora', edicao='$edicao', dataPublicacao='$dataPublicacao', quantidade='$quantidade', preco='$preco', foto='$foto' where id = " .$_POST['id'];
}

$result = $conn->query($sql);

if (!$result) die('Erro ao inserir dados');

$conn->close();

header('Location: index.php');

?>