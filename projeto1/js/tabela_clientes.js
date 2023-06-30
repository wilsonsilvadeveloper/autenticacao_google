function imprimeSessionConsulta() {
  const sessionConsulta = document.querySelector("#consulta-tabela");
  const div = document.createElement("div");
  div.setAttribute("class", "container-inputs");

  const input = document.createElement("input");
  input.setAttribute("type", "text");
  input.setAttribute("name", "nome");
  input.setAttribute("class", "input");
  input.setAttribute("id", "alvo");

  const bottom = document.createElement("button");
  bottom.setAttribute("type", "button");
  bottom.setAttribute("onclick", "executaConsulta()");
  bottom.textContent = "Procurar";

  div.appendChild(input);
  div.appendChild(bottom);
  sessionConsulta.appendChild(div);
}

var controle = 0;

function tabela() {
  const sessionTable = document.querySelector(".table");
  const table = document.createElement("table");
  table.setAttribute("id", "tabelaClientes");

  const thread = document.createElement("thead");
  const trThread = document.createElement("tr");

  const th1 = document.createElement("th");
  th1.textContent = "Nome";
  const th2 = document.createElement("th");
  th2.textContent = "Email";
  const th3 = document.createElement("th");
  th3.textContent = "Telefone";

  trThread.appendChild(th1);
  trThread.appendChild(th2);
  trThread.appendChild(th3);
  thread.appendChild(trThread);
  table.appendChild(thread);
  sessionTable.appendChild(table);
}

function imprime(cliente) {
  if (controle == 0) {
    imprimeSessionConsulta();
    tabela();
    controle = 1;
  }

  const table = document.querySelector("#tabelaClientes");
  const sessionTable = document.querySelector(".table");
  const tbody = document.createElement("tbody");

  const nome = cliente.nome;
  const telefone = cliente.telefone;
  const email = cliente.email;

  const row = document.createElement("tr");
  row.setAttribute("class", "linha");

  const nomeCell = document.createElement("td");
  nomeCell.setAttribute("id", "nome");
  nomeCell.setAttribute("class", "coluna");
  nomeCell.textContent = nome;
  row.appendChild(nomeCell);

  const emailCell = document.createElement("td");
  emailCell.setAttribute("id", "email");
  emailCell.setAttribute("class", "coluna");
  emailCell.textContent = email;
  row.appendChild(emailCell);

  const telefoneCell = document.createElement("td");
  telefoneCell.setAttribute("id", "telefone");
  telefoneCell.setAttribute("class", "coluna");
  if (telefone !== null && telefone.length > 0) {
    telefoneCell.textContent = telefone;
  } else {
    telefoneCell.classList.add("red");
    telefoneCell.textContent = "não tem";
  }
  row.appendChild(telefoneCell);

  row.addEventListener("dblclick", () => {
    var url = "../../info-clientes/cliente-info.html";
    var novaAba = window.open(url, "_blank");

    novaAba.onload = function () {
      var cliente = {
        nome: row.querySelector("#nome").textContent,
        email: row.querySelector("#email").textContent,
        telefone: row.querySelector("#telefone").textContent,
      };

      var rowCodificada = btoa(JSON.stringify(cliente));
      novaAba.location.search = "row=" + encodeURIComponent(rowCodificada);
    };
  });

  tbody.appendChild(row);
  table.appendChild(tbody);
  sessionTable.appendChild(table);
}

function imprimeErro() {
  const sectionContainer = document.querySelector(".container");
  const sessionErro = document.createElement("section");
  sessionErro.setAttribute("class", "error");

  const imgErro = document.createElement("img");
  imgErro.setAttribute("src", "../../../img/sem-resultados.png");

  const msgError = document.createElement("p");
  msgError.textContent = "Nenhum cliente encontrado";
  msgError.setAttribute("class", "error");

  sessionErro.appendChild(imgErro);
  sessionErro.appendChild(msgError);
  sectionContainer.appendChild(sessionErro);
}
