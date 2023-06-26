let sidebar = document.querySelector('.sidebar');

function abriSidebar(){
    sidebar.classList.add('abrirSidebar');
    sidebar.classList.remove('fecharSidebar');
}

function fecharSidebar() {
    sidebar.classList.remove('abrirSidebar');
    sidebar.classList.add('fecharSidebar');
    //sidebar.style.display = 'none';
}


//  controles do menu


function abrirTela(tela) {
    var conteudo = document.getElementById("conteudo");
    conteudo.innerHTML = "";

    let section = document.createElement('section')
    section.setAttribute('class', 'tela-' + tela);

    var iframe = document.createElement("iframe");
    iframe.src = "http://localhost/projeto1/html/sub_tela/tabela_cliente/" + tela + ".html";

    section.appendChild(iframe);
    conteudo.appendChild(section);

    console.log(conteudo);
  }