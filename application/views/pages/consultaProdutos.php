<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Lista de Usuários</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Fabricante</th>
                <th scope="col">Modelo</th>
                <th scope="col">Quantidade em estoque</th>
                <th scope="col">Opções</th>
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
                    <td>
                    <button type="button" onclick="location.href='http://localhost/produtos/edit/<?= $value['id'] ?>';" class="btn btn-primary">Editar</button>
                    <button type="button"  onclick="destroy(<?= $value['id']; ?>)" class="btn btn-primary">Excluir</button>
                    </td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>