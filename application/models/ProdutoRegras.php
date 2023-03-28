<?php

class ProdutoRegras extends CI_Model {

    public function store($request)
    {   
        $formatPreco = str_replace(",", ".", $request['preco']);
        $preco = floatval($formatPreco);
        $formatMoeda = numfmt_create( 'pt_BR', NumberFormatter::CURRENCY );
        $precoEmReal = numfmt_format_currency($formatMoeda, $preco , "BRL");
        var_dump($precoEmReal);

        $produto = array(
            "nome" => $request['nome'],
            "marca" => $request['fabricante'],
            "modelo" => $request['modelo'],
            "preco" => $precoEmReal,
            "quantidade" => $request['quantidadeProd'],
            //"fk_colaborador" => "",
        );

        $this->db->insert("produto", $produto);
    }

    public function consultar()
    {
        $this->db->where('produto.deleted_at', null);
        return  $this->db->get("produto")->result_array();
    }

    public function show($id)
    {
        $this->db->select('*');
        $this->db->from('produto');
        $this->db->where('produto.id', $id);
        return $this->db->get()->row_array();
    }

    public function update($id, $request)
    {
        
        $this->db->where("produto.id", $id);
        $this->db->update("produto", $request);
    }

    public function delete($id)
    {
        $deteled = array("deleted_at" => date("Y-m-d H:i:s"));
        $this->db->where("produto.id", $id);
        $this->db->update("produto", $deteled);
    }
}