<?php

Class Solicitacao extends CI_Controller {

	public function index() {

		$this->load->template('Solicitacao/index');
	}

	public function envia() {

		$this->form_validation->set_rules("title","Titulo","required");
		$this->form_validation->set_rules("mensagem","Mensagem","required");

		if ($this->form_validation->run() == false) {

			$this->load->template('Solicitacao/index');

		} else {
			$titulo = $this->input->post('titulo');
			$mensagem = $this->input->post('mensagem');

			$this->load->model('Solicitacao_model');
			if ($this->Solicitacao_model->grava($titulo,$mensagem)) {

				$this->session->set_flashdata('mensagem','Mensagem enviada com sucesso!');
				redirect('index.php/solicitacao/index');
			} else {

				$this->session->set_flashdata('mensagem','Mensagem não enviada com sucesso!');
				redirect('index.php/solicitacao/index');
			}
		}
	}
}



?>