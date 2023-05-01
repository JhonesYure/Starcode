const title = "Transfomando o problema em solução";

const velocidade = 100; // velocidade em milissegundos

let i = 0;

function escreverMensagem() {
	if (i < title.length) {
		document.getElementById("title").innerHTML += title.charAt(i);
		i++;
		setTimeout(escreverMensagem, velocidade);
	}
}

setTimeout(escreverMensagem, velocidade);