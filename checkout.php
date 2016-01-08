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
			<div class="row">
				<div class="col-md-4"> <!-- Essa classe só tem efeito em devices com tela > 992px -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div> <!-- fim .panel-heading -->

						<div class="panel-body">
							<img class="img-responsive img-thumbnail" src="img/produtos/foto<?= $_POST['id'] ?>-<?= $_POST['cor'] ?>.png">
							<dl>
								<dt>Produto</dt>
								<dd><?= $_POST['nome'] ?></dd>
								<dt>Preço</dt>
								<dd id="preco"><?= $_POST['preco'] ?></dd>
								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>
								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho'] ?></dd>
							</dl>

							<div class="form-group">
								<label for="qt">Quantidade</label>
								<input id="qt" class="form-control" type="number" min="1" max="99" value="1">
							</div> <!-- fim .form-group -->

							<div class="form-group">
								<label for="total">Total</label>
								<output for="qt valor" id="total" class="form-control">
									<?= $_POST['preco'] ?>
								</output>
							</div> <!-- fim .form-group -->
						</div> <!-- fim .panel-body -->
					</div> <!-- fim .panel panel-default -->
				</div> <!-- fim .col-md-4 -->

				<form class="col-md-8">
					<fieldset>
						<legend>Dados pessoais</legend>

						<div class="form-group">
							<label for="nome">Nome completo</label>
							<input type="text" class="form-control" id="nome" name="nome" autofocus>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">	
						</div>

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99">
						</div>

						<div class="checkbox">
							<label>
								<input type="checkbox" value="sim" name="spam" checked>
								Quero receber spam da Mirror Fashion
							</label>
						</div>

					</fieldset>

					<fieldset>
						<legend>Cartão de crédito</legend>
						
						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" class="form-control" 
							       id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao">Bandeira</label>
							<select name="bandeira-cartao" id="bandeira-cartao"
									class="form-control">
								<option value="master">MasterCard</option>
								<option value="visa">VISA</option>
								<option value="amex">American Express</option>
							</select>
						</div>

						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" class="form-control" 
								id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>

					<button type="submit" class="btn btn-lg">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
				</form>
			</div> <!-- fim .row -->
		</div> <!-- fim .container -->

		<script src="js/jquery.js"></script>
		<script src="js/inputmask-plugin.js"></script>

		<script src="js/converteMoeda.js"></script>
		<script src="js/testaConversao.js"></script>
		<script src="js/total.js"></script>
	</body>
</html>
