<div class="col-md-8 container-fluid mt-4 card py-3">
    <h5>Lista de Usuários</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Número de Matricula</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $user) : ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['nome']; ?></td>
                    <td><?= $user['sobrenome']; ?></td>
                    <td><?= $user['num_matricula']; ?></td>
                    <td>
                    <button type="button" onclick="location.href='http://localhost/usuario/edit/<?= $user['id'] ?>';" class="btn btn-primary">Editar</button>
                    <button type="button"  onclick="destroy(<?= $user['id']; ?>)" class="btn btn-primary">Excluir</button>
                    </td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>