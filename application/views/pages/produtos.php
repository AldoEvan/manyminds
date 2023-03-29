<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Cadastro Produto</h5>
    <form id="formProduto" class="row g-3">
        <div class="col-md-6">
            <label for="inputproduto" class="form-label">Nome Produto</label>
            <input type="text" name="nome" value="<?= isset($produto) ? $produto['nome'] : null ?>" class="form-control" id="inputproduto">
        </div>
        <div class="col-md-6">
            <label for="marca" class="form-label">Fabricante</label>
            <input type="text" name="fabricante" value="<?= isset($produto) ? $produto['fabricante'] : null ?>" class="form-control" id="marca">
        </div>
        <div class="col-md-6">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" name="modelo" value="<?= isset($produto) ? $produto['modelo'] : null ?>" class="form-control" id="modelo">
        </div>
        <div class="col-md-6">
            <label for="preço" class="form-label">Preço</label>
            <input type="text" inputmode="numeric" name="preco" value="<?= isset($produto) ? $produto['preco'] : null ?>" class="form-control" id="preco">
        </div>
        <div class="col-md-6">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" min="0" name="quantidade" value="<?= isset($produto) ? $produto['quantidade'] : null ?>" class="form-control" id="quantidade">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <?php if (!isset($produto)) : ?>
                <button type="button" onclick="cadastrarProduto()" class="btn btn-primary">Salvar</button>
            <?php else : ?>
                <button type="button" onclick="editarProduto(<?= $produto['id'] ?>)" class="btn btn-primary">Editar</button>
            <?php endif; ?>
            <button type="button" onclick="location.href='http://localhost/produtos/consulta'" class="btn btn-danger">Cancelar</button>
        </div>
    </form>
</div>