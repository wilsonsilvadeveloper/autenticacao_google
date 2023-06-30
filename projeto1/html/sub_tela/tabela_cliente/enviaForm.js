const form = document.querySelector("#formCliente");
let aviso = document.querySelector("#aviso");
formCliente.addEventListener("submit", function (event) {
  event.preventDefault(); // Impede o comportamento padrão do formulário

  // Obtenção dos dados do formulário
  var nome = form.nome.value;
  var email = form.email.value;
  var telefone = form.telefone.value;
  var data = form.data.value;

  // Construção dos dados a serem enviados
  var dados = {
    nome: nome,
    email: email,
    telefone: telefone,
    data: data,
  };

  // Criação da requisição AJAX
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./adicionarCliente.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    let resposta = JSON.parse(xhr.responseText);
    let cor = resposta.cor;
    
    if (xhr.status === 200) {
      aviso.style.color = cor;
      aviso.textContent = resposta.message;
    } else {
      aviso.style.color = cor;
      aviso.textContent = resposta.message;
    }
  };

  form.reset();

  var dataToSend = Object.keys(dados)
    .map(function (key) {
      return encodeURIComponent(key) + "=" + encodeURIComponent(dados[key]);
    })
    .join("&");

  xhr.send(dataToSend);
});
