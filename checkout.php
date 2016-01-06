<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Mirror Fashion - Checkout</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha</h1>

				<p>Obrigado por comprar na Mirror Fashion! Preencha os dados para efetivar as compras.</p>
			</div> <!-- fim .container -->
		</div> <!-- fim .jumbotron -->

		<div class="container">
			<h2>Sua compra</h2>
			<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png">
			<dl>
				<dt>Produto</dt>
				<dd><?= $_POST['nome'] ?></dd>
				<dt>Preço</dt>
				<dd><?= $_POST['preco'] ?></dd>
				<dt>Cor</dt>
				<dd><?= $_POST['cor'] ?></dd>
				<dt>Tamanho</dt>
				<dd><?= $_POST['tamanho'] ?></dd>
			</dl>
		</div> <!-- fim .container -->
	</body>
</html>
