<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href=<?=base_url('css/bootstrap.css'); ?>>
   <title>Contas </title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="position:relative; top:150px;">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <div class="panel-title">
          Contas 
            </div>
          </div>
          <div class="panel-body">
          <fieldset> 
          <?php 
            $form = new MakeFormIgniter();
            $form->formOpen('index.php/Login/logado');
            $form->name = 'email';
            $form->label = 'E-mail';
            $form->id = 'email';
            $form->type = 'email';
            $form->maxlength = 255;
            $form->class = 'form-control';
            $form->text();

            $form->name = 'senha';
            $form->label = 'Senha';
            $form->id = 'senha';
            $form->type = 'password';
            $form->maxlength = 255;
            $form->class = 'form-control';
            $form->text();

            $form->value = 'Logar';
            $form->type = 'submit';
            $form->class = 'btn btn-lg btn-success btn-block';
            $form->button();
            $form->formClose();?>
        </fieldset>
        </div>
      </div>
       <?php if ($this->session->userdata('danger')): ?>
        <p class="alert alert-danger"><?php echo $this->session->userdata('danger'); ?></p>
        <?php endif ?>
        <?php if ($this->session->userdata('success')): ?>
        <p class="alert alert-success"><?php echo $this->session->userdata('success'); ?></p>
        <?php endif ?>
    </div>
  </div>
</div>
</body>
</html>


