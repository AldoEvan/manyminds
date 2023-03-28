<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();

	}
	public function index()
	{
		/* print "<pre>";
		print_r($_SESSION);
		print "</pre>";
		exit; */
		$data['titulo'] = "Produtos";
		$this->load->view('templates/header');
		$this->load->view('pages/produtos', $data);
		$this->load->view('templates/footer');

	}

	public function store()
	{
		$request = $_POST;
		$this->load->model('ProdutoRegras');
		$this->ProdutoRegras->store($request);
		
	}

	public function consulta()
	{
		$this->load->model("ProdutoRegras");
		$data["produto"] = $this->ProdutoRegras->consultar();
		$data["titulo"] = "Consulta de Produtos";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/consultaProdutos', $data);
		$this->load->view('templates/footer', $data);
	}

	public function edit($id)
	{	
		$this->load->model("ProdutoRegras");
		$data["produto"] = $this->ProdutoRegras->show($id);
		$data["titulo"] = "Editar Produto";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/produtos', $data);
		$this->load->view('templates/footer', $data);
	}

	public function update($id)
	{
		$this->load->model('ProdutoRegras');
		$request = $_POST;
		$this->ProdutoRegras->update($id, $request);
		redirect('http://localhost/produtos/consulta', 'refresh');
	}

	public function delete($id)
	{
		$this->load->model('ProdutoRegras');
		$this->ProdutoRegras->delete($id);
		redirect('http://localhost/produtos/consulta');
	}


}

