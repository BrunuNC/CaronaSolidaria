<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php

//conexão com o BD

//$conexao = mysqli_connect('localhost', 'root', '', 'caronasolidaria');
$dsn = 'mysql:host=localhost; dbname=caronasolidaria';
$usuario = 'root';
$senha = '';
$conexao = new PDO($dsn, $usuario, $senha);

//SELECIONAR TODOS OS DADOS DOS CLIENTES E SALVAR NA VARIÁVEL "listaClientes"
$dados = $conexao->query('SELECT * FROM cliente');
$listaClientes = $dados->fetchAll(PDO::FETCH_OBJ);
//print_r($listaClientes);
?>

<h1>Lista de Clientes cadastrados</h1>

<div class="table-responsive">
  <table class="table table-hover table-bordered table-sm">
    <thead class="thead-dark">
        
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

      foreach ($listaClientes as $cliente) { ?>
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
          </tr>  
        </tbody>
    <?php    
      }

    ?>
  </table>
</div>