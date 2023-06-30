function recebeItens(itens) {
  tabela(itens);
}

function cabecalhoTabela() {
  let tabela = document.createElement("table");
  tabela.setAttribute("id", "tabela");

  let thead = document.createElement("thead");
  const trThread = document.createElement("tr");

  const th1 = document.createElement("th");
  th1.textContent = "Nome";
  th1.setAttribute("id", "nome");
  const th2 = document.createElement("th");
  th2.textContent = "Descrição";
  th2.setAttribute("id", "descrição");
  const th3 = document.createElement("th");
  th3.textContent = "Data de Validade";
  th3.setAttribute("id", "validade");
  const th4 = document.createElement("th");
  th4.textContent = "Quantidade";
  th4.setAttribute("id", "quantidade");
  const th5 = document.createElement("th");
  th5.textContent = "Preço Unitario";
  th5.setAttribute("id", "preco");
  const th6 = document.createElement("th");
  th6.textContent = "Total";
  th6.setAttribute("id", "total");

  trThread.appendChild(th1);
  trThread.appendChild(th2);
  trThread.appendChild(th3);
  trThread.appendChild(th4);
  trThread.appendChild(th5);
  trThread.appendChild(th6);
  thead.appendChild(trThread);
  tabela.appendChild(thead);

  return tabela;
}

function tabela(itens_vendidos) {
  let table = cabecalhoTabela();
  let tbody = document.createElement("tbody");

  itens_vendidos.forEach((iten) => {
    var dataFormatoAnoMesDia = new Date(iten.data_validade);
    var dia = dataFormatoAnoMesDia.getUTCDate();
    var mes = dataFormatoAnoMesDia.getUTCMonth() + 1; // Adicionamos 1 para ajustar o mês
    var ano = dataFormatoAnoMesDia.getUTCFullYear();

    const itens = {
      nome: iten.nome,
      descricao: iten.descricao,
      dataValidade: dia + "/" + mes + "/" + ano,
      quantidade: iten.quantidade,
      precoUnitario: iten.preco_unitario + ' R$',
      total: (iten.preco_unitario * iten.quantidade) + ' R$',
    };


    console.log(itens);

    const row = document.createElement("tr");
    row.setAttribute("class", "linha");

    const tr1 = document.createElement("td");
    tr1.setAttribute("id", "nome-produto");
    tr1.textContent = itens.nome;

    const tr2 = document.createElement("td");
    tr2.setAttribute("id", "produto-descricao");
    tr2.textContent = itens.descricao;

    const tr3 = document.createElement("td");
    tr3.setAttribute("id", "produto-data-validade");
    tr3.textContent = itens.dataValidade;

    const tr4 = document.createElement("td");
    tr4.setAttribute("id", "produto-quantidade");
    tr4.textContent = itens.quantidade;

    const tr5 = document.createElement("td");
    tr5.setAttribute("id", "produto-preco");
    tr5.textContent = itens.precoUnitario;

    const tr6 = document.createElement("td");
    tr6.setAttribute("id", "produto-total");
    tr6.textContent = itens.total;


    row.appendChild(tr1);
    row.appendChild(tr2);
    row.appendChild(tr3);
    row.appendChild(tr4);
    row.appendChild(tr5);
    row.appendChild(tr6);

    tbody.appendChild(row);
  });

  table.appendChild(tbody);
  let sectionTabela = document.querySelector(".sectionTabela");
  sectionTabela.appendChild(table);
}
