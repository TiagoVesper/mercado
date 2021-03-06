<html>
<head>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

	<div class="container">

		<?php if ($this->session->flashdata('success')) : ?>
		<p class="alert alert-success"><?= $this->session->flashdata('success')?></p>
		<?php endif ?>
		<?php if ($this->session->flashdata('danger')) : ?>
		<p class="alert alert-danger"><?= $this->session->flashdata('danger')?></p>
		<?php endif ?>

		<h1>Produtos</h1>
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td>Preço:</td>
				<td>Descrição:</td>
			</tr>
		<?php foreach($produtos as $produto) : ?>
			<tr>
				<td><?= $produto['nome'] ?></td>
				<td><?= numeroEmReais($produto['preco']) ?></td>
				<td><?= $produto['descricao'] ?></td>
			</tr>
		<?php endforeach ?>
		</table>

		<?php if($this->session->userdata('usuario_logado')) {
			echo anchor('produtos_c/formulario', 'formulario', array(
				'class' => 'btn btn-primary'));
				echo anchor('login_c/logout', 'logout', array(
					   'class' => 'btn btn-primary'));
		} else { ?>
			<h1>Login</h1>
			<?php
			echo form_open('login_c/autenticar');
			echo form_label('Email', 'email');
			echo form_input(array(
				'name' => 'email',
				'id' => 'email',
				'class' => 'form-control',
				'maxlebgth'=> '255'

			));
			echo form_label('Senha', 'senha');
			echo form_password(array(
				'name' => 'senha',
				'id' => 'senha',
				'class' => 'form-control',
				'maxlebgth'=> '255'

			));
			echo form_button(array(
				'class' => 'btn btn-primary',
				'content' => 'Logar',
				'type' => 'submit'
			));
			echo form_close();

			?>
			<h1>Cadastro</h1>
			<?php
			echo form_open('usuarios_c/novo');
			echo form_label('Nome', 'nome');
			echo form_input(array(
				'name' => 'nome',
				'id' => 'nome',
				'class' => 'form-control',
				'maxlebgth'=> '255'

			));
			echo form_label('Email', 'email');
			echo form_input(array(
				'name' => 'email',
				'id' => 'email',
				'class' => 'form-control',
				'maxlebgth'=> '255'

			));
			echo form_label('Senha', 'senha');
			echo form_password(array(
				'name' => 'senha',
				'id' => 'senha',
				'class' => 'form-control',
				'maxlebgth'=> '255'

			));
			echo form_button(array(
				'class' => 'btn btn-primary',
				'content' => 'Cadastrar',
				'type' => 'submit'
			));
			echo form_close();
		} ?>
	</div>

</body>
</html>