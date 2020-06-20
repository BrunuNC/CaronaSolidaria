<?php require('cabecalho.php')?>
<?php require('banco.php');?>
<?php require('funcoes.php');?>
<?php


if(isset($_GET['idUsuario'])) {
  $idUsuario = $_GET['idUsuario'];
  $dados = verificarID($conexao, $idUsuario);
//  print_r($dados);
} else {
  echo ("ERRO:Usuário não encontrado!");
}

function clienteBool($idUsuario, $conexao) {
  return $dados = verificarID($conexao, $idUsuario);
}

if (isset($_POST['idUsuario']) && clienteBool($_POST['idUsuario'], $conexao)) {
//  print_r($_POST);
  $idUsuario = $_POST['idUsuario'];
  $nomeUsuario = $_POST['nomeUsuario'];
  $dataNascimento = $_POST['dataNascimento'];
  $rg = $_POST['RG'];
  $cpf = $_POST['CPF'];
  $fone = $_POST['fone'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $dataCadastro = $_POST['dataCadastro'];
  $cidade = $_POST['cidade'];


  if (atualizarCadastro($conexao, $nomeUsuario, $dataNascimento, $rg, $cpf, $fone, $email, $login, $senha, $dataCadastro, $cidade)) {
    echo("Cadastro atualizado com sucesso!");
  } else {
    echo("Cadastro não foi atualizado!");
  }
  header("Location:cadastro-lista.php");
  die();
}

?>

<div class="container">
  <h3>Atualizar Cadastro</h3>

  <form action="editar-cadastro.php?idUsuario=<?= $idUsuario ?>" method="post">
    <?php
      require('formulario.php');
    ?>
    <div>
      <input type="submit" value="atualizar" class="btn btn-info">
    </div>
  </form>
</div>

<?php include "rodape.php"?>