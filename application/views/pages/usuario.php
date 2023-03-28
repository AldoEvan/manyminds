<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Ficha de Cadastro</h5>
    <form id="formCadastro" class="row g-3">
        <div class="col-md-6">
            <label for="inputnome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required value="<?= isset($usuario) ? $usuario['nome'] : null ?>" id="inputnome">
        </div>
        <div class="col-md-6">
            <label for="sobrenome" class="form-label">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" required value="<?= isset($usuario) ? $usuario['sobrenome'] : "" ?>" id="sobrenome">
        </div>
        <div class="col-md-6">
            <label for="inputpassword" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" required value="<?= isset($usuario) ? "" : "" ?>" id="inputpassword" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="inputemail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required value="<?= isset($usuario) ? $usuario['email'] : "" ?>" id="inputemail" placeholder="exemplo@email.com">
        </div>
        <div class="col-md-4">
            <label for="inputCPF" class="form-label">CPF</label>
            <input type="text" name="cpf" class="form-control"  required value="<?= isset($usuario) ? $usuario['cpf'] : "" ?>" id="inputCPF">
        </div>
        <div class="col-md-2">
            <label for="num_matricula" class="form-label">Matrícula</label>
            <input type="text" name="num_matricula" class="form-control" required value="<?= isset($usuario) ? $usuario['num_matricula'] : "" ?>" id="num_matricula">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Perfil</label>
            <select id="inputState" name="fk_perfil" required class="form-select">
                <option selected><?= isset($usuario) ? $usuario['perfil'] : "" ?></option>
                <option value="1" selected>Usuário</option>
                <option value="2">Fornecedor</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputDate" class="form-label">Data de Nascimento</label>
            <input type="date" name="dt_nascimento" value="<?= isset($usuario) ? $usuario['dt_nascimento'] : "" ?>" class="form-control" id="inputDate">
        </div>
        <h5>Endereço</h5>
        <div class="col-md-9">
            <label for="inputRua" class="form-label">Rua</label>
            <input type="text" name="rua" class="form-control" value="<?= isset($usuario) ? $usuario['rua'] : "" ?>" id="inputRua">
        </div>
        <div class="col-md-3">
            <label for="Cep" class="form-label">CEP</label>
            <input type="text" name="CEP" class="form-control" value="<?= isset($usuario) ? $usuario['cep'] : "" ?>" id="Cep">
        </div>
        <div class="col-md-10">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" name="complemento" class="form-control" value="<?= isset($usuario) ? $usuario['complemento'] : "" ?>" id="complemento">
        </div>
        <div class="col-md-2">
            <label for="numero" class="form-label">Número</label>
            <input type="text" name="numero" class="form-control" value="<?= isset($usuario) ? $usuario['numero'] : "" ?>" id="numero">
        </div>
        <div class="col-md-6">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" name="bairro" class="form-control" value="<?= isset($usuario) ? $usuario['bairro'] : "" ?>" id="bairro">
        </div>
        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" value="<?= isset($usuario) ? $usuario['cidade'] : "" ?>" id="cidade">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary">Adicionar Novo Enedereço</button>
        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <?php if (!isset($usuario)) : ?>
                <button type="button" onclick="cadastrarUsuario()" class="btn btn-primary">Salvar</button>
            <?php else : ?>
                <button type="button" onclick="editarUsuario(<?= $usuario['id'] ?>)" class="btn btn-primary">Editar</button>
            <?php endif; ?>
            <button type="button" onclick="location.href='http://localhost/usuario/'" class="btn btn-danger">Cancelar</button>

        </div>
    </form>
</div>