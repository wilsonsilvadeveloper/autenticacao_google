var xhttp = new XMLHttpRequest();
var erroChamado = false; // Variável de controle

xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var resposta = JSON.parse(this.responseText);
    imprime(resposta);
    console.log(resposta);
  } else {
    if (!erroChamado) { // Verifica se a função já foi chamada
      imprimeErro();
      erroChamado = true; // Atualiza a variável de controle
    }
  }
};

xhttp.open("GET", "./cliente.php", true);
xhttp.send();
