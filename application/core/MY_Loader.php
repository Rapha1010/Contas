<?php

Class MY_Loader extends CI_Loader{

	function template($data) {

		$this->view("template/header");
		$this->view($data);
		$this->view("template/footer");
	}
}


?>