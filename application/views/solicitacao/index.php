<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href= <?=base_url('css/bootstrap.css'); ?>>
	<title>Solicitacao</title>
</head>
<body>
<div class="container">
<?php if ($this->session->userdata('mensagem')): ?>
<p class="alert alert-success"><?php echo $this->session->userdata('mensagem'); ?></p>
<?php endif ?>
<h3>Página de Solicitação</h3>
<?php
  $form = new MakeFormIgniter();
  $form->formclose();
  $form->formOpen('Solicitacao/envia');

  $form->label = "Título";
  $form->name = "title";
  $form->id = "title";
  $form->class = "form-control";
  $form->text();
  
  $form->label = "Mensagem";
  $form->name = "mensagem";
  $form->id = "mensagem";
  $form->class = "form-control";
  $form->textArea();

  $form->value = "Enviar Mensagem";
  $form->type = "submit";
  $form->class = "btn btn-primary";
  $form->button();
  $form->formClose();
?>
</div>

</body>
</html>