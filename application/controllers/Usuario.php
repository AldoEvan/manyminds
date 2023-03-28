<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		$this->load->model("UsuarioRegras");
		$data["titulo"] = "Cadastro de Usuario";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/usuario', $data);
		$this->load->view('templates/footer', $data);
	}

	public function store()
	{	
		$request = $_POST;
		$this->load->model("UsuarioRegras");
		$this->UsuarioRegras->store($request);
		redirect("http://localhost/login");

		
	}

	public function consulta()
	{
		permission();
		$this->load->model("UsuarioRegras");
		$data["usuarios"] = $this->UsuarioRegras->consultar();
		$data["titulo"] = "Cadastro de Usuario";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/consultaUsuario', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit($id)
	{
		permission();
		$this->load->model("UsuarioRegras");
		$data["usuario"] = $this->UsuarioRegras->show($id);
		$data["titulo"] = "Editar Usuario";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/usuario', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		permission();
		$this->load->model('UsuarioRegras');
		$request = $_POST;
		$this->UsuarioRegras->update($id, $request);
		redirect('http://localhost/usuario/consulta');
	}

	public function delete($id)
	{
		permission();
		$this->load->model('UsuarioRegras');
		$this->UsuarioRegras->delete($id);
		redirect('http://localhost/usuario/consulta');
	}


}
