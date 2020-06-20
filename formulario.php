<input type="hidden" name="idUsuario" value="<?= $dados['idUsuario'] ?>">

<div class="form-row mb-3">

  <div class="col">
    <label>Nome:</label>
    <input type="text" name="nomeUsuario" class="form-control" placeholder="Digite seu nome" value="<?= $dados['nomeUsuario'] ?>">
  </div>

  <div class="col">
    <label>Data de Nascimento:</label>
    <input type="date" name="dataNascimento" class=" form-control w-50" placeholder="Digite sua data de nascimento" value="<?= $dados['dataNascimento'] ?>">
  </div>  

</div>

<div class="form-row mb-3">

  <div class="col">
    <label>RG:</label>
    <input type="text" name="RG" class="form-control" placeholder="Digite seu RG" value="<?= $dados['RG'] ?>">
  </div>

  <div class="col">
    <label>CPF:</label>
    <input type="text" name="CPF" class="form-control" placeholder="Digite seu CPF" value="<?= $dados['CPF'] ?>">
  </div>

</div>

<div class="form-row mb-3">

  <div class="col">
    <label>Telefone:</label>
    <input type="text" name="fone" class="form-control" placeholder="Digite seu telefone" value="<?= $dados['fone'] ?>">
  </div>

  <div class="col">
    <label>Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Digite seu email" value="<?= $dados['email'] ?>">
  </div>

  <div class="col">
    <label>Login:</label>
    <input type="text" name="login" class="form-control" placeholder="Digite seu Login" value="<?= $dados['login'] ?>">
  </div>

  <div class="col">
    <label>Senha:</label>
    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" value="<?= $dados['senha'] ?>">
  </div>

  <div class="col">
    <label>Data do Cadastro:</label>
    <input type="date" name="dataCadastro" class="form-control" value="<?= $dados['dataCadastro'] ?>">
  </div>

  <div class="col">
    <label>Cidade:</label>
    <input type="text" name="cidade" class="form-control" placeholder="Digite sua Cidade" value="<?= $dados['cidade'] ?>">
  </div>
<!--  --><?php //print_r($dados); ?>

</div>