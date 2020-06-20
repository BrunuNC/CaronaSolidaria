<?php require('cabecalho.php');?>
<?php require('banco.php');?>
<?php require('funcoes.php');

$dadosUsuario = listaCadastros($conexao);?>


<h1>Lista de Clientes cadastrados</h1>

<div class="container">

  <div class="row justify-content-between mt-3">

    <div class="ml-3">
      <h3>Clientes</h3>
    </div>

    <div class="mr-3">
      <a href="inserir-cadastro.php" class="btn btn-primary">Novo</a>
    </div>

  </div>
  
    <table class="table">
      <thead>
  
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Data do Cadastro</th>
        <th>Cidade</th>
      </tr>
      </thead>
  
  
      <?php
  
      foreach ($dadosUsuario as $cliente) { ?>
        <tbody>
        <tr>
          <th scope="row"><?php echo $cliente -> idUsuario ?></th>
          <td><?php echo $cliente -> nomeUsuario ?></td>
          <td><?php echo $cliente -> dataNascimento ?></td>
          <td><?php echo $cliente -> RG ?></td>
          <td><?php echo $cliente -> CPF ?></td>
          <td><?php echo $cliente -> fone ?></td>
          <td><?php echo $cliente -> email ?></td>
          <td><?php echo $cliente -> dataCadastro ?></td>
          <td><?php echo $cliente -> cidade ?></td>
  
            <td>
    
              <div class="row">
    
                <div class="col">
                  <a href="editar-cadastro.php?idUsuario=<?= $cliente->idUsuario ?>" class="btn btn-warning">Editar</a>
                </div>
            </td>
            <td> 
                <div class="col">
    
                  <form action="remover-cadastro.php" method="POST">
                    <input type="hidden" name="idUsuario" value="<?= $cliente->idUsuario ?>">
                    <button class="btn btn-danger form-control" type="submit" onclick="return confirm('Deseja mesmo deletar?')">Excluir</button>
                  </form>
    
                </div>
    
              </div>
    
            </td>
  
        </tr>
  
        <?php } ?>
  
        </tbody>
    
    </table>
</div>

<?php require ('rodape.php')?>
