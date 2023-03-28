<?php

class UsuarioRegras extends CI_Model
{

    public function consultar()
    {
        $this->db->where('colaborador.deleted_at', null);
        return  $this->db->get("colaborador")->result_array();
    }

    public function store($request)
    {
        $crypto = password_hash($request['password'], PASSWORD_BCRYPT);

        $dados = array(
            "nome" => $request['nome'],
            "sobrenome" => $request['sobrenome'],
            "password" => $crypto,
            "cpf" => $request['cpf'],
            "email" => $request['email'],
            "num_matricula" => $request['num_matricula'],
            "dt_nascimento" => $request['dt_nascimento'],
            "fk_perfil" => $request['fk_perfil']
        );
        if ($dados['nome'] == "") {
            print("<pre>");
            print_r("O nome é obrigatorio");
            print("<pre>");
        } else {
            $this->db->insert("colaborador", $dados);
        }

        $id = $this->db->insert_id();

        $endereco = array(
            "rua" => $request['rua'],
            "cep" => $request['CEP'],
            "complemento" => $request['complemento'],
            "numero" => $request['numero'],
            "bairro" => $request['bairro'],
            "cidade" => $request['cidade'],
            "fk_colaborador" => $id
        );
        $this->db->insert("endereco", $endereco);
    }

    public function show($id)
    {
        $this->db->select('colaborador.id, nome, sobrenome, email, cpf, dt_nascimento, num_matricula, fk_perfil, perfil, rua, cep, complemento, numero, bairro, cidade');
        $this->db->from('colaborador');
        $this->db->join('perfil', 'perfil.id = colaborador.fk_perfil', 'left');
        $this->db->join('endereco', 'endereco.fk_colaborador = colaborador.id', 'left');
        $this->db->where(' colaborador.id', $id);
        return $this->db->get()->row_array();
    }

    public function update($id, $request)
    {
        $this->db->where("colaborador.id", $id);

        $dados = array(
            "nome" => $request['nome'],
            "sobrenome" => $request['sobrenome'],
            "cpf" => $request['cpf'],
            "email" => $request['email'],
            "num_matricula" => $request['num_matricula'],
            "dt_nascimento" => $request['dt_nascimento'],
            "fk_perfil" => $request['perfil']
        );
        $this->db->update("colaborador", $dados);

        $endereco = array(
            "rua" => $request['rua'],
            "cep" => $request['CEP'],
            "complemento" => $request['complemento'],
            "numero" => $request['numero'],
            "bairro" => $request['bairro'],
            "cidade" => $request['cidade'],
        );

        $this->db->where("endereco.fk_colaborador", $id)->update("endereco", $endereco);
    }

    public function delete($id)
    {
        $deteled = array("deleted_at" => date("Y-m-d H:i:s"));
        $this->db->where("colaborador.id", $id);
        $this->db->update("colaborador", $deteled);
    }
}
