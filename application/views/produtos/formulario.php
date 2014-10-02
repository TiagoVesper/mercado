<html>
<head>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

	<div class="container">

		<h1>Cadastro de produto</h1>
		<?php
		echo form_open('produtos_c/novo');
		echo form_label('Nome','nome');
		echo form_input(array(
			'name' => 'nome',
			'id' => 'nome',
			'class' => 'form-control',
			'maxlength' => '255'
		));
		echo form_label('Preco','preco');
		echo form_input(array(
			'name' => 'preco',
			'id' => 'preco',
			'class' => 'form-control',
			'maxlength' => '12',
			'type' => 'number'
		));
		echo form_textarea(array(
			'name' => 'descricao',
			'id' => 'descricao',
			'class' => 'form-control'
		));
		echo form_button(array(
			'class' => 'btn btn-primary',
			'content' => 'Cadastrar',
			'type' => 'submit'
		));
		echo form_close();
		?>

	</div>
</body>
</html>