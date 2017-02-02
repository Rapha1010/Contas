<?php

Class MY_Loader extends CI_Loader{

	function template($endereco, $data = null) {

		$this->view("template/header");
		$this->view($endereco, $data);
		$this->view("template/footer");
	}
}


?>