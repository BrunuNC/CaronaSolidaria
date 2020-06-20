<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

<?php

//conexão com o BD

//$conexao = mysqli_connect('localhost', 'root', '', 'caronasolidaria');
$dsn = 'mysql:host=localhost; dbname=caronasolidaria';
$usuario = 'root';
$senha = '';
$conexao = new PDO($dsn, $usuario, $senha);

//SELECIONAR TODOS OS DADOS DOS CLIENTES E SALVAR NA VARIÁVEL "listaClientes"
//$dados = $conexao->query('SELECT * FROM cliente');
//$listaClientes = $dados->fetchAll(PDO::FETCH_OBJ);
//print_r($listaClientes);
?>
