<?php include "cabecalho.php"?>
    <h1>Cadastro de Usuários</h1>
    <form action="inserir-cadastro.php" method="post">
        <table class="table">
            <tr>
                <td>Nome</td>
                <td><input class="form-control" type="text" name="nome"></td>
            </tr>
            <tr>
                <td>Data de Nascimento</td>
                <td><input class="form-control" type="date" name="dataNasc"></td>
            </tr>
            <tr>
                <td>RG</td>
                <td><input class="form-control" type="text" name="rg"></td>
            </tr>
            <tr>
                <td>CPF</td>
                <td><input class="form-control" type="text" name="cpf"></td>
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
                <td>
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </td>
            </tr>
        </table>
            <script>
                function activeCheck() {

                }
            </script>

            <input type="checkbox" name="motorista" id="moto"  > Motorista

    </form>
<?php include "rodape.php"?>



