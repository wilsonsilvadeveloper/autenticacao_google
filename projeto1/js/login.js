let respostaServidor;

// Função para enviar os dados do formulário
function enviarDadosFormulario(email, senha) {
  var aviso = document.querySelector("#alerta");

  // Obter os valores dos campos do formulário
  var emails = email;
  var senhas = senha;

  // Criar um objeto FormData e adicionar os valores dos campos
  var formData = new FormData();
  formData.append("email", emails);
  formData.append("senha", senhas);

  // Criar uma instância do objeto XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Definir  a função de callback para a resposta da requisição
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      var resposta = JSON.parse(xhr.responseText);

      if (resposta.encontrado) {
        // Cliente encontrado: exibir os dados

        var url = "http://localhost/projeto1/html/tela_inicial.html";
        window.open(url, "_self");
      } else {
        // Cliente não encontrado: exibir mensagem de erro
        console.error("Usuario não encontrado.");
        aviso.textContent = "Usuario não encontrado";
      }
    }
  };

  // Abrir uma requisição POST assíncrona para o arquivo PHP
  xhr.open("POST", "index.php", true);

  // Enviar a requisição com os dados do formulário
  xhr.send(formData);
}

// Associar a função ao evento de envio do formulário
document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault(); // Impedir o envio padrão do formulário
  enviarDadosFormulario(this.email.value, this.senha.value);
  // Chamar a função para enviar os dados
});
