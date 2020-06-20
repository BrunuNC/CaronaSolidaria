<?php
require('banco.php');

function verificarID($conexao, $idUsuario) {
  $dados = $conexao->query("SELECT * FROM cliente WHERE idUsuario = '{$idUsuario}'");
  return $dadosUsuario = $dados->fetch(PDO::FETCH_ASSOC);
}

function listaCadastros($conexao) {
  $dados = $conexao->query("SELECT * FROM cliente");
  return $listaUsuarios = $dados->fetchAll(PDO::FETCH_OBJ);
}

function atualizarCadastro($conexao, $nomeUsuario, $dataNascimento, $rg, $cpf, $fone, $email, $login,	$senha, $dataCadastro, $cidade) {
    $query = "UPDATE cliente SET (nomeUsuario = '{$nomeUsuario}', dataNascimento = '{$dataNascimento}', RG = '{$rg}', CPF = '{$cpf}', fone = '{$fone}', email = '{$email}', login = '{$login}',senha = '{$senha}',dataCadastro = '{$dataCadastro}',cidade = '{$cidade}')";
    return $conexao->query($query);
//    echo ($query);
}

function insereCadastro($conexao, $nomeUsuario, $dataNascimento, $rg, $cpf, $fone, $email, $login,	$senha, $dataCadastro, $cidade) {
    $query = "INSERT INTO cliente (nomeUsuario, dataNascimento, RG,	CPF ,fone, email, login, senha, dataCadastro, cidade) values ('{$nomeUsuario}', '{$dataNascimento}', '{$rg}', '{$cpf}', '{$fone}', '{$email}', '{$login}','{$senha}','{$dataCadastro}','{$cidade}')";
    return $conexao->query($query);
}

function removeCadastro($conexao, $idUsuario) {
    $query = "delete from cliente where idUsuario = {$idUsuario}";
    return $conexao->query($query);
}