var imagem = document.querySelector(".destaque img");
console.log(imagem.src);

var banners = [
	'img/destaque-home.png',
	'img/destaque-home-2.png'
];

function trocaBanner() {
	imagem.src = banners[0];
	banners.reverse();
}

var timer;

function iniciaBanner() {
	timer = setInterval(trocaBanner, 4000);
}

function paraBanner() {
	clearInterval(timer);
}

imagem.onmouseover = paraBanner;
imagem.onmouseleave = iniciaBanner;

iniciaBanner();
