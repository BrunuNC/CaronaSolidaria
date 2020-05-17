<?php include "cabecalho.php"?>
<?php include('banco.php');?>
<?php include('banco-cadastros.php');?>
        <?php


        $nome = $_POST['nome'];
        $dataNasc = $_POST['dataNasc'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if (insereCadastro($conexao, $nome, $dataNasc, $rg, $cpf, $fone, $email, $login, $senha)) { ?>
            <p class="text-success">Cadastro <?= $nome ?>, <?= $email ?> adicionado com sucesso!</p>
        <?php } else {
            $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">Cadastro <?= $nome ?> não foi adicionado: <?= $msg?></p>
        <?php
        }

        ?>

<?php include "rodape.php"?>