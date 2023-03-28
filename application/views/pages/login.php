<div class="col-md-8 container-fluid mt-4 card py-3">
    <form method="POST" action="<?= base_url() . "login/store" ?>">
        <h5>Já Possui Cadastro</H5>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Senha</label>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <button type="button" onclick="location.href='http://localhost/usuario';" class="btn btn-primary">Cadastrar</button>
            <button type="submit" class="btn btn-primary">Esqueci a senha</button>
        </div>
    </form>
</div>