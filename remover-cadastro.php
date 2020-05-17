<?php include "cabecalho.php"?>
<?php include('banco.php');?>
<?php include('banco-cadastros.php');

$id = $_POST['id'];
removeCadastro($conexao, $id);
header("Location: cadastro-lista.php?removido=true");
die();
?>

