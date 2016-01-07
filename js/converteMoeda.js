var numero = 9.9;
var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
console.log(formatado);

var texto = "R$ 120,35";
var valor = parseFloat(texto.replace("R$ ", "").replace(",", "."));
console.log(valor);


/*
console.log('');
console.log('numero --> R$');

var numero = 171.171;
console.log(numero);

var numeroTextoComDoisDecimais = numero.toFixed(2);
console.log(numeroTextoComDoisDecimais);

var numeroTextoComVirgula = numeroTextoComDoisDecimais.replace('.', ',');
console.log(numeroTextoComVirgula);

var real = 'R$ ' + numeroTextoComVirgula;
console.log(real);

//-----------------------------------------------------------------------
console.log('');
console.log('R$ --> numero');

var numeroReal = 'R$ 171,17';
console.log(numeroReal);

var numeroCapado = numeroReal.replace('R$ ', '').replace(',', '.');
console.log(numeroCapado);

var numero = parseFloat(numeroCapado);
console.log(numero);
*/
