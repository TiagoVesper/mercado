<html>
<head>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
</head>
<body>

	<div class="container">
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
	</div>

</body>
</html>