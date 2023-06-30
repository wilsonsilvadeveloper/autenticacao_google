function abrirModal() {
    let modal = document.querySelector('#modal');
    modal.classList.remove('fecharModal');
    modal.classList.add('abrirModal');
}

function fecharModal() {
    let modal = document.querySelector('#modal');
    modal.classList.remove('abrirModal');
    modal.classList.add('fecharModal');
}