let cliente = enviaInfo();

// Construção dos dados a serem enviados
var dados = {
  email: cliente.email
};

console.log(dados);


// Criação da requisição AJAX
var xhr = new XMLHttpRequest();
xhr.open("POST", "./busca-venda.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

// Função para tratar a resposta da requisição AJAX
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    var resposta = JSON.parse(xhr.responseText);
    let sectionErro = document.querySelector('#semCompras');
    console.log(resposta);
    if(resposta.encontrado == true) {
      sectionErro.style.display = 'none';
      recebeVendas(resposta.dados);
    } else {
      sectionErro.style.display = 'flex';
    }
  }
};

// Serializar o objeto "dados" para o formato de dados x-www-form-urlencoded
var dataToSend = Object.keys(dados)
  .map(function(key) {
    return encodeURIComponent(key) + "=" + encodeURIComponent(dados[key]);
  })
  .join("&");

// Enviar a requisição AJAX com os dados
xhr.send(dataToSend);