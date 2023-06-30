var urlParams = new URLSearchParams(window.location.search);
var clienteObjeto;

if (urlParams.has("row")) {
  var rowCodificada = urlParams.get("row");
  var rowDecodificada = atob(rowCodificada);
  clienteObjeto = JSON.parse(rowDecodificada);
  console.log(clienteObjeto);
}

function atualizaTitle(){
    let title = document.querySelector('#title');
    title.textContent = clienteObjeto.nome;
}

function atualizaH1(){
    let h1 = document.querySelector('#nomeCliente');
    h1.textContent += clienteObjeto.nome;
}

function enviaInfo(){
  return clienteObjeto;
}

atualizaTitle();
atualizaH1();