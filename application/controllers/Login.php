<?php

class Login extends CI_Controller {

	public function index() {

		$this->load->view("login/index");
		if($this->session->userdata("usuario"))
		redirect("index.php/home/index");
	}

	public function logado() {

		$this->form_validation->set_rules("senha","senha","required");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$this->load->model("Usuario_model");
		$usuario = $this->Usuario_model->getUsuarioEmailESenha($email,$senha);

		if($usuario) {

			$this->session->set_userdata("usuario",$usuario);
			$this->session->set_flashdata("success","Logado com sucesso!");
			$data = array("mensagem"=>"Logado com sucesso!");		
			redirect("index.php/home/index");
		} else {
			$this->session->set_flashdata("danger","Dados incorretos!");
			$data = array("mensagem"=>"Dados incorretos!");
			redirect("/");
		}
	}

	public function logout() {

		$this->session->unset_userdata("usuario");
		$this->session->set_flashdata("success","Deslogado com sucesso!");
		redirect("/");
	}
}

?>