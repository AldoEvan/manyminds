<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Lista de Produtos</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Modelo</th>
                <th scope="col">Quantidade em estoque</th>
                <th scope="col">Preço</th>
                <th scope="col">Opções</th>
                <th scope="col">Adicionar ao Pedido</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($produto as $value) : ?>
                <tr>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['nome']; ?></td>
                    <td><?= $value['fabricante']; ?></td>
                    <td><?= $value['modelo']; ?></td>
                    <td><?= $value['quantidade']; ?></td>
                    <td><?= $value['preco']; ?></td>

                    <td>
                        <button type="button" onclick="location.href='http://localhost/produtos/edit/<?= $value['id'] ?>';" class="btn btn-primary">Editar</button>
                        <button type="button" onclick="destroy(<?= $value['id']; ?>)" class="btn btn-danger">Excluir</button>
                    </td>
                    <td>
                        <button type="button" onclick="pedido(<?= $value['id']; ?>)" class="btn btn-primary">Adicionar</button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Itens do Pedido</h5>
    <table id="pedido">
        <thead>
            <tr>
                <th data-nome="id" scope="col">ID</th>
                <th data-nome="nome" scope="col">Nome</th>
                <th data-nome="fabricante" scope="col">Fabricante</th>
                <th data-nome="preco" scope="col">Preço</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <button type="button" onclick="confirmarPedido()" class="btn btn-primary">Enviar Pedido</button>
</div>