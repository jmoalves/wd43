<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title>Mirror Fashion - Checkout</title>
	</head>
	<body>
		<h1>Ótima escolha</h1>

		<p>Obrigado por comprar na Mirror Fashion! Preencha os dados para efetivar as compras.</p>

		<h2>Sua compra</h2>
		<img src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png">
		<dl>
			<dt>Cor</dt>
			<dd><?= $_POST['cor'] ?></dd>
			<dt>Tamanho</dt>
			<dd><?= $_POST['tamanho'] ?></dd>
		</dl>
	</body>
</html>
