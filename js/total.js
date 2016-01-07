var quantidadeElemento = document.querySelector("#qt");
var precoElemento = document.querySelector("#preco");
var totalElemento = document.querySelector("#total");

function calculaTotal() {
	var quantidade = parseFloat(this.value);
	var preco = realParaNumber(precoElemento.textContent);
	var total = quantidade * preco;

	totalElemento.textContent = numberParaReal(total);
}

quantidadeElemento.oninput = calculaTotal;