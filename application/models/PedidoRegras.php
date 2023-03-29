<?php

class PedidoRegras extends CI_Model {

    public function store($request)
    {   
        var_dump($request);
        $formatPreco = str_replace(",", ".", $request['preco']);
        $preco = floatval($formatPreco);
        $formatMoeda = numfmt_create( 'pt_BR', NumberFormatter::CURRENCY );
        $precoEmReal = numfmt_format_currency($formatMoeda, $preco , "BRL");
        var_dump($precoEmReal);

        $produto = array(
            "nome" => $request['nome'],
            "fabricante" => $request['fabricante'],
            "modelo" => $request['modelo'],
            "preco" => $precoEmReal,
            "quantidade" => $request['quantidade'],
            //"fk_colaborador" => "",
        );

        $this->db->insert("produto", $produto);
    }

    public function consultaPedido()
    {
        # code...
    }

}