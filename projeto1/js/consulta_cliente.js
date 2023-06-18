function procuraTr() {
  let tr = document.querySelectorAll(".linha");
  return tr;
}


function executaConsulta() {
  let input = document.querySelector("#alvo");

  let trs = procuraTr();

  trs.forEach(function (tr) {
    let nome = tr.querySelector("#nome").textContent;
    if (input.value !== nome) {
      tr.classList.remove("add");
      tr.classList.add("remove");
    } else {
      tr.classList.remove("remove");
      tr.classList.add("add");
    }
  });
}
