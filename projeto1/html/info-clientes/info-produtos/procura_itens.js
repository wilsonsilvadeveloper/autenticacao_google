let venda = enviaDados();
console.log(venda);

// Construção dos dados a serem enviados
var dados = {
  id: venda.id
};

// Criação da requisição AJAX
var xhr = new XMLHttpRequest();
xhr.open("POST", "./produtos.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onload = function () {  
  if (xhr.status === 200) {
    let resposta = JSON.parse(xhr.responseText);
    recebeItens(resposta.message);
  } else {
    console.log(xhr.responseText)
  }
};


var dataToSend = Object.keys(dados)
  .map(function (key) {
    return encodeURIComponent(key) + "=" + encodeURIComponent(dados[key]);
  })
  .join("&");

xhr.send(dataToSend);
