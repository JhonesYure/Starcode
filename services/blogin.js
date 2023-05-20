function mostrarItens() {
    var divItensOcultos = document.getElementById('itens-ocultos');
    var btnVerMais = document.getElementById('ver-mais-btn');
  
    if (divItensOcultos.style.display === 'none') {
      divItensOcultos.style.display = 'block';
      btnVerMais.textContent = 'Ver Menos';
    } else {
      divItensOcultos.style.display = 'none';
      btnVerMais.textContent = 'Ver Mais';
    }
  }
  //
  
  
  window.addEventListener('scroll', function() {
    var setaTopo = document.getElementById("voltar-topo");
    var alturaPagina = document.documentElement.scrollHeight;
    var alturaJanela = window.innerHeight;
    var posicaoAtual = window.scrollY || window.pageYOffset;
  
    if (posicaoAtual > (alturaPagina / 2) && posicaoAtual > alturaJanela) {
      setaTopo.classList.add("show");
    } else {
      setaTopo.classList.remove("show");
    }
  });