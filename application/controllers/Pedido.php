<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		permission();

	}
	public function index()
	{
		$request = $_POST;
        $data['titulo'] = "Pedido";
        $data['pedido'] = $request;
        var_dump($data);
		$this->load->view('templates/header');
		$this->load->view('pages/pedido', $data);
		$this->load->view('templates/footer');

	}

	public function store()
	{
		var_dump($_POST);
		$request = $_POST;
		$this->load->model('PedidoRegras');
		$this->PedidoRegras->store($request);
		
	}

	public function consulta()
	{
		$this->load->model("PedidoRegras");
		$data["produto"] = $this->PedidoRegras->consultaPedido();
		$data["titulo"] = "Consulta de Pedido";	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/consultapedido', $data);
		$this->load->view('templates/footer', $data);
	}
}