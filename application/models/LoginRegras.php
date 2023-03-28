<?php

class LoginRegras extends CI_Model  
{
    public function store($email)
    {   
        $this->db->where("email", $email);
        $usuario = $this->db->get("colaborador")->row_array();
        return $usuario;
        
    }
}
