<?php include "cabecalho.php"?>
    <h1>Cadastro de Usuários</h1>
    <form action="inserir-cadastro.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nomeUsuario"></td>
            </tr>
            <tr>
                <td>Data de Nascimento</td>
                <td><input class="form-control" type="date" name="dataNascimento"></td>
            </tr>
            <tr>
                <td>RG</td>
                <td><input class="form-control" type="text" name="RG"></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><input class="form-control" type="text" name="CPF"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input class="form-control" type="text" name="fone"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email"></td>
            </tr>
            <tr>
                <td>Login</td>
                <td><input class="form-control" type="text" name="login"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
          <tr>
            <td>Data do Cadastro</td>
            <td><input class="form-control" type="datetime-local" name="dataCadastro"></td>
          </tr>
          <tr>
            <td>Cidade</td>
            <td><input class="form-control" type="text" name="cidade"></td>
          </tr>
            <tr>
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>

    </form>
<?php include "rodape.php"?>



