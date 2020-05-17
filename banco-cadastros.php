<?php
function listaCadastros($conexao) {
    $cadastros = array();
    $resultado = mysqli_query($conexao, "select * from usuario");
    while ($cadastro = mysqli_fetch_assoc($resultado)) {
        array_push($cadastros, $cadastro);
    }
    return $cadastros;
}

function insereCadastro($conexao, $nome, $dataNasc, $rg, $cpf, $fone, $email, $login,	$senha ) {
    $query = "INSERT INTO usuario (nome, dataNasc, RG,	CPF ,fone, email, login, senha) values ('{$nome}', '{$dataNasc}', '{$rg}', '{$cpf}', '{$fone}', '{$email}', '{$login}','{$senha}')";
    return mysqli_query($conexao, $query);


}

function removeCadastro($conexao, $id) {
    $query = "delete from usuario where idUsuario = {$id}";
    return mysqli_query($conexao, $query);
}