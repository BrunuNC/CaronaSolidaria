<?php require('cabecalho.php')?>
<?php require('banco.php');?>
<?php require('funcoes.php');

$idUsuario = $_POST['idUsuario'];
if ($dados = verificarID($conexao, $idUsuario)) {
  removeCadastro($conexao, $idUsuario);
  header("Location:cadastro-lista.php");
} else {
  echo ("Cliente não foi deletado!");
}

