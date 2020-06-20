<?php require('cabecalho.php')?>
<?php require('banco.php');?>
<?php require('funcoes.php');


$dados = [];
$dados['idUsuario'] = "";
$dados['nomeUsuario'] = "";
$dados['dataNascimento'] = "";
$dados['RG'] = "";
$dados['CPF'] = "";
$dados['fone'] = "";
$dados['email'] = "";
$dados['login'] = "";
$dados['senha'] = "";
$dados['dataCadastro'] = "";
$dados['cidade'] = "";
?>

<div class="container mt-3">
  <h3>Cadastrar Cliente</h3>
  <form action="inserir-cadastro.php" method="post">
    <?php
      require('formulario.php');
    ?>
    <div class="mt-3">
      <input type="submit" value="Cadastrar" class="btn btn-success px-5 mt-3">
    </div>    
  </form>  
</div>

<?php

function hasPost() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

if (hasPost()) {
  print_r($_POST);
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

        if (insereCadastro($conexao, $nomeUsuario, $dataNascimento, $rg, $cpf, $fone, $email, $login, $senha, $dataCadastro, $cidade)) {
          header("Location:cadastro-lista.php");  
        } else {
          echo ("Cliente não Cadastrado!");
        }
}

require ('rodape.php')?>