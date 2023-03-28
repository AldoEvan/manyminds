
function destroy(id) {
    fetch('http://localhost/usuario/delete/' + id, {
        method: 'POST',

    }).then((response) => response)
        .then(json =>
            console.log(id),
            location.reload()
        )
        .catch(err =>
            console.log(err)
        );

}

function editarUsuario(id) {
    let data = new FormData(formCadastro);
    fetch('http://localhost/usuario/update/' + id, {
        method: 'POST',
        body: data,
    })
        .then((response) => response.json)
        .then(() => {
            console.log("Produto salvo com Sucesso")
            location.replace("http://localhost/usuario/consulta");
        })
        .catch(() => {
            console.log("Erro consulte o suporte do sistemas")
        });
};

function cadastrarUsuario() {
    let data = new FormData(formCadastro);
    fetch('http://localhost/usuario/store', {
        method: 'POST',
        body: data,
    })
        .then((response) => response.json())
        .then(() => {
            console.log("Produto salvo com Sucesso")
        })
        .catch(err =>
            console.log(err)
        );
};


function cadastrarProduto() {
    let data = new FormData(formProduto);
    fetch('http://localhost/produtos/store', {
        method: 'POST',
        body: data,
    })
        .then((response) => response.json)
        .then(() => {
            console.log("Produto salvo com Sucesso")
        })
        .catch(() => {
            console.log("Erro consulte o suporte do sistemas")
        });
};

function editarProduto(id) {
    let data = new FormData(formProduto);
    fetch('http://localhost/produtos/update/' + id, {
        method: 'POST',
        body: data,
    })
        .then((response) => response)
        .then(json =>
            console.log(id),
            location.replace('http://localhost/produtos/consulta')
        )
        .catch(err =>
            console.log(err)
        );
};


function destroy(id) {
    fetch('http://localhost/produtos/delete/' + id, {
        method: 'POST',

    }).then((response) => response)
        .then(json =>
            console.log(id),
            location.replace('http://localhost/produtos/consulta')
        )
        .catch(err =>
            console.log(err)
        );

}

