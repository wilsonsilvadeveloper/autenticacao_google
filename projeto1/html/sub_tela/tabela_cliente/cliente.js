var xhttp = new XMLHttpRequest();
var erroChamado = false; // Variável de controle
var result;
xhttp.onreadystatechange = function() {
  if (this.readyState == 4) {
    if (this.status == 200) {
      var resposta = JSON.parse(this.responseText);
      result = resposta;
      if (resposta.encontrado == true) {
        resposta.dados.forEach(element => {
          imprime(element);
        });
      }
    } else {
      if (!erroChamado) { // Verifica se a função já foi chamada
        imprimeErro();
        erroChamado = true; // Atualiza a variável de controle
      }
    }
  }
};

xhttp.open("GET", "./cliente.php", true);
xhttp.send();
