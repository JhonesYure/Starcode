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


/* AJAX */
var form = document.getElementById('meu-form');

form.addEventListener('submit', function(event) {
  // Impede que o formulário seja enviado usando o método padrão
  event.preventDefault();
  
  // Cria uma nova solicitação AJAX
  var xhr = new XMLHttpRequest();
  
  // Define o método HTTP como POST e o URL do arquivo PHP
  xhr.open('POST', 'processa-form.php', true);
  
  // Define o tipo de conteúdo da solicitação como JSON
  xhr.setRequestHeader('Content-type', 'application/json');
  
  // Define uma função de callback para lidar com a resposta da solicitação
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Exibe a resposta do servidor
      console.log(xhr.responseText);
    }
  };
  
  // Cria um objeto que contém os dados do formulário
  var formData = new FormData(form);
  
  // Converte o objeto em uma string JSON
  var jsonData = JSON.stringify(Object.fromEntries(formData.entries()));
  
  // Envia a solicitação AJAX com os dados do formulário em formato JSON
  xhr.send(jsonData);
});
