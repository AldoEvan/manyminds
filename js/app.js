
function confirmarPedido() {
    var data = JSON.stringify(sessionStorage.getItem("listaProduto"))
    fetch('http://localhost/pedido/store', {
        method: 'POST',
        body: data,
    })
        .then(() => {
            //location.assign("http://localhost/pedido");
            console.log("Produto salvo com Sucesso")

        })
        .catch(() => {
            console.log("Erro consulte o suporte do sistemas")
        });
};


function storePedido() {
    let data = listaProduto;
    fetch('http://localhost/pedido/store', {
        method: 'POST',
        body: data,
    })
        .then(() => {
            console.log("Produto salvo com Sucesso")
        })
        .catch(() => {
            console.log("Erro consulte o suporte do sistemas")
        });
};


function popularTabela(dados) {
    var tabela = document.getElementById('pedido');
    var nomes = [];
    var th = tabela.tHead.getElementsByTagName('th');

    for (var i = 0; i < th.length; i++) {
        nomes.push(th[i].getAttribute("data-nome"));
    }

    var tbody = "";
    for (var i in dados) {
        tbody += "<tr>" + td(dados[i]) + "</tr>";

    }

    function td(val) {
        var td = "";
        for (var i = 0; i < nomes.length; i++) {
            td += "<td>" + val[nomes[i]] + "</td>";
        }
        td += "<td>" + "<button type='button' id='remover' class='btn btn-danger'>Remover</button>" + "</td>";
        return td;

    }

    document.getElementsByTagName('button').onclick = function () {
        listaProduto.pop();
    }
    tabela.tBodies[0].innerHTML = tbody;
}

let listaProduto = [];

async function pedido(item) {
    let produto = await fetch('http://localhost/produtos/consultaitem/' + item)
        .then(res => res.json())
        .then((data) => { return data })
        .catch(function (error) {
            console.log(error);
        });

    if (produto) {
        listaProduto.push(produto);
    }

    sessionStorage.setItem("listaProduto", JSON.stringify(listaProduto));
    popularTabela(listaProduto);
    return listaProduto;

}


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
        .then(() => {
            console.log("Produto salvo com Sucesso")
        })
        .catch(() => {
            console.log("Erro consulte o suporte do sistemas")
        });
};


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

