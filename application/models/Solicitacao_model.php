<?php

Class Solicitacao_model extends CI_Model {

	public function grava($title,$mensagem) {

		$data = array(
   		'titulo' =>$title,
   		'mensagem' =>$mensagem);
		if($this->db->insert('solicitacao', $data))
			return true;
		else
			return false;
	}

}