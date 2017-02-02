<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Raphael Alves
 *
 */

Class MakeFormIgniter {

	public $id, $name, $label, $value, $type, $maxlength, $class;

	public function formOpen($action) {
		echo form_open($action);
	}

	public function formClose() {
		echo form_close();
	}

	public function text() {

	  echo form_label($this->label,$this->id);
      echo form_input(array(
            "id"=>$this->id,
            "name"=>$this->name,
            "type"=>$this->type,
            "maxlength"=>$this->maxlength,
            "class"=>$this->class,
            "value"=>empty($this->value) ? set_value($this->name) : $this->value));
      echo form_error($this->id);

      echo "<br>";
	}

	public function textArea() {

	  echo form_label($this->label,$this->id);
      echo form_textarea(array(
            "id"=>$this->id,
            "name"=>$this->name,
            "type"=>$this->type,
            "maxlength"=>$this->maxlength,
            "class"=>$this->class,
            "value"=>empty($this->value) ? set_value($this->name) : $this->value));
      echo form_error($this->id);

      echo "<br>";
	}

	public function button() {

		echo form_button(array(
              "content"=>$this->value,
              "type"=>$this->type,
              "class"=>$this->class));
	}

} 