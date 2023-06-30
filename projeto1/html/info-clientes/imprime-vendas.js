function recebeVendas(listaVendas) {
  tabela(listaVendas);
}

function cabecalhoTabela() {
  let tabela = document.createElement("table");
  tabela.setAttribute("id", "tabela");

  let thead = document.createElement("thead");
  const trThread = document.createElement("tr");

  const th1 = document.createElement("th");
  th1.textContent = "Id da Venda";
  th1.setAttribute("id", "id-venda");
  const th2 = document.createElement("th");
  th2.textContent = "Data da Venda";
  th2.setAttribute("id", "data-venda");
  const th3 = document.createElement("th");
  th3.textContent = "Vendedor";
  th3.setAttribute("id", "vendedor");
  const th4 = document.createElement("th");
  th4.textContent = "Total";
  th4.setAttribute("id", "total");
  const th5 = document.createElement("th");
  th5.textContent = "Total Pago";
  th5.setAttribute("id", "totalPago");

  trThread.appendChild(th1);
  trThread.appendChild(th2);
  trThread.appendChild(th3);
  trThread.appendChild(th4);
  trThread.appendChild(th5);
  thead.appendChild(trThread);
  tabela.appendChild(thead);

  return tabela;
}

function tabela(listaVendas) {
  let table = cabecalhoTabela();
  let tbody = document.createElement("tbody");

  listaVendas.forEach((venda) => {
    var dataFormatoAnoMesDia = new Date(venda.data_venda);
    var dia = dataFormatoAnoMesDia.getDate();
    var mes = dataFormatoAnoMesDia.getMonth() + 1; // Adicionamos 1 para ajustar o mês
    var ano = dataFormatoAnoMesDia.getFullYear();

    const vendas = {
      id: venda.id,
      data: dia + "/" + mes + "/" + ano,
      vendedor: venda.funcionario_id,
      total: venda.valor_total,
      totalPago: venda.valor_pago,
    };

    const row = document.createElement("tr");
    row.setAttribute("class", "linha");

    const tr1 = document.createElement("td");
    tr1.setAttribute("id", "id");
    tr1.textContent = vendas.id;

    const tr2 = document.createElement("td");
    tr2.setAttribute("id", "data");
    tr2.textContent = vendas.data;

    const tr3 = document.createElement("td");
    tr3.setAttribute("id", "id-vendedor");
    if (venda.vendedor == null || venda.vendedor == "") {
      tr3.textContent = "Administrador";
    } else {
      tr3.textContent = vendas.vendedor;
    }

    const tr4 = document.createElement("td");
    tr4.setAttribute("id", "total-venda");
    tr4.textContent = vendas.total;

    const tr5 = document.createElement("td");
    tr5.setAttribute("id", "total-pago");
    if (venda.totalPago == null || venda.totalPago == "") {
      tr5.textContent = 0;
    } else {
      tr5.textContent = vendas.totalPago;
    }

    row.appendChild(tr1);
    row.appendChild(tr2);
    row.appendChild(tr3);
    row.appendChild(tr4);
    row.appendChild(tr5);

    row.addEventListener("dblclick", () => {
      var url = "./info-produtos/produtos.html";
      var novaAba = window.open(url, "_blank");

      novaAba.onload = function () {
        var rowCodificada = btoa(JSON.stringify(vendas));
        novaAba.location.search = "row=" + encodeURIComponent(rowCodificada);
      };
    });

    tbody.appendChild(row);
  });

  table.appendChild(tbody);
  let sectionTabela = document.querySelector(".tabela");
  sectionTabela.appendChild(table);
}
