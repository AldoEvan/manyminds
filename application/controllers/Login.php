<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		$this->load->helper('url');
		$data['titulo'] = "Pagina de Login";
		$this->load->view('templates/header', $data);
		$this->load->view('pages/login', $data);
		$this->load->view('templates/footer', $data);
	}

	public function store()
	{
		$this->load->model("LoginRegras");
		$email = $_POST["email"];
		$password = $_POST["password"];
		$user = $this->LoginRegras->store($email);

		if ($user && password_verify($password, $user['password'])) {
			$this->session->set_userdata("logado", $user);
			redirect("http://localhost/produtos");
		} else {
			redirect('http://localhost/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logado");
		redirect('http://localhost/login');
	}
}
