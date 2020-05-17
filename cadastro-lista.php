<?php include "cabecalho.php"?>
<?php include('banco.php');?>
<?php include('banco-cadastros.php');?>


<?php
    if (array_key_exists("removido", $_GET) && $_GET["removido"] == true) {
?>
    <p class="alert-success">Cadastro removido com sucesso.</p>

<?php
    }
?>


<table class="table table-striped table-bordered"><?php
    $cadastros = listaCadastros($conexao);
    foreach ($cadastros as $cadastro) :
    ?>
    <tr>
        <td><?= $cadastro['nome']?></td>
        <td><?= $cadastro['email']?></td>
        <td>
            <form action="remover-cadastro.php" method="post">
                <input type="" name="id" value="<?= $cadastro['idUsuario']?>">
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
<?php
    endforeach;
?>
</table>

<?php //echo('<pre>');
//print_r($cadastros); echo('</pre>');
include "rodape.php"?>
