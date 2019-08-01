<!DOCTYPE HTML>
<html>
    <head>
        <title>Cadastro de Livro</title>
 
        <!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" /> -->
        <!-- Include custom CSS. -->
        <link rel="stylesheet" type="text/css" href="../css/livro.css" />
 
    </head>
<body>

<div id='retrieved-data' style='height:15em;'>
    <!--
    This is where data will be shown.
    -->
</div>

<!-- <script type = "text/javascript" src = "./js/jquery.min.js"></script> -->
<script type = "text/javascript">
$(function(){
    // show the first page
    getdata(1);
});
 
function getdata(pageno){
    // source of data
    var targetURL = 'busca_resultados.php?page=' + pageno;
 
    // show loading animation
    $('#retrieved-data').html('<img src="./imagens/ajax-loader.gif" />');
 
    // load to show new data
    $('#retrieved-data').load(targetURL).hide().fadeIn('slow');
}
</script>

</body>
</html>
