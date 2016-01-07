function trocaCor() {
	alert("Vou mudar");
	this.style.backgroundColor = "red";
}

document.querySelector('#historia').onclick = trocaCor;
