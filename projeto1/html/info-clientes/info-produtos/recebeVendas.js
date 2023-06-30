var urlParams = new URLSearchParams(window.location.search);
var vendaObjeto;

if (urlParams.has("row")) {
  var rowCodificada = urlParams.get("row");
  var rowDecodificada = atob(rowCodificada);
  vendaObjeto = JSON.parse(rowDecodificada);
  console.log(vendaObjeto);
}

function atualizaInfo(){
    let h1 = document.querySelector('h1');
    h1.textContent += ' ' + '#' + vendaObjeto.id;

    //let p = document.querySelector('#nomeCliente')
}

atualizaInfo();

function enviaDados() {
  return vendaObjeto;
}