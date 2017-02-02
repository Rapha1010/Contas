<?php

Class Usuario_model extends CI_Model {

	public function getUsuarioEmailESenha($email,$senha) {

		$this->db->where("email",$email);
		$this->db->where("senha",$senha);
		$usuario = $this->db->get("usuario")->row_array();

		return $usuario;
	}

}