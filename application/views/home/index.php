
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Bem vindo ao Home</h3>
	</div>
		<div class="panel-body">

		<div id="myfirstchart" style="height:250px;"></div>

		<?php

		echo anchor('index.php/Solicitacao/index','Enviar Solicitacao');

		$form = new MakeFormIgniter();
		$form->formOpen('index.php/Login/logout');
		$form->value = 'Logout';
		$form->type = 'submit';
		$form->class = 'btn btn-primary';
		$form->button();

		?>
		</div>
</div>

<script>
	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'myfirstchart',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: [
	    { year: '2008', value: 20 },
	    { year: '2009', value: 10 },
	    { year: '2010', value: 5 },
	    { year: '2011', value: 5 },
	    { year: '2012', value: 20 }
	  ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'year',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Value']
	});
</script>


