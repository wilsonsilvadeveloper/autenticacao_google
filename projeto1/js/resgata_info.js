// Obtém as informações salvas nos cookies
var cookies = document.cookie;
  
// Verifica se os cookies existem
if (cookies) {
  // Divide os cookies em pares chave-valor
  var cookiePairs = cookies.split(';');
  
  // Objeto para armazenar as informações dos clientes
  var clientes = [];
  
  // Percorre os pares chave-valor dos cookies
  cookiePairs.forEach(function (pair) {
    var cookie = pair.trim().split('=');
    var key = cookie[0];
    var value = cookie[1];
    
    // Verifica se o cookie contém as informações dos clientes
    if (key === 'clientes') {
      // Decodifica a string
      var decodedValue = decodeURIComponent(value);
      
      // Converte as informações em um objeto JavaScript
      clientes = JSON.parse(decodedValue);
    }
  });
  
  // Utilize os dados dos clientes conforme necessário
  clientes.forEach(function (cliente) {
    console.log(cliente);
    imprime(cliente);
  });
}
